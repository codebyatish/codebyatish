<?php
class TaskController extends Controller
{
    public $layout = 'admin';

    public function beforeAction($action)
    {
        if (empty(Yii::app()->user->getState('user_email'))) {
            $this->redirect(Yii::app()->createUrl('auth/login'));
            return false;
        }
        return parent::beforeAction($action);
    }
    
    public function actionIndex()
    {   
        $loggedInUserId = Yii::app()->user->getState('user_id');
        $loggedInUserRole = Yii::app()->user->getState('user_role');

        $sql = "SELECT t.*, 
                    CONCAT(u1.first_name, ' ', u1.last_name) AS assigned_user_name, 
                    CONCAT(u2.first_name, ' ', u2.last_name) AS created_by_name 
                FROM tasks t
                LEFT JOIN users u1 ON t.assigned_to = u1.id
                LEFT JOIN users u2 ON t.created_by = u2.id";

        if ($loggedInUserRole == 'user') {
            $sql .= " WHERE t.assigned_to = :loggedInUserId";
        }

        $sql .= " ORDER BY t.created_at DESC";

        $command = Yii::app()->db->createCommand($sql);

        if ($loggedInUserRole == 'user') {
            $command->bindParam(':loggedInUserId', $loggedInUserId, PDO::PARAM_INT);
        }

        $tasks = $command->queryAll();

        $this->render('index', ['tasks' => $tasks]);
    }


    public function actionCreate()
    {
        if (isset($_POST['Task'])) {
            $title = $_POST['Task']['title'];
            $description = $_POST['Task']['description'];
            $assigned_to = $_POST['Task']['assigned_to'];
            $status = $_POST['Task']['status'];
            $created_by = Yii::app()->user->getState('user_id');

            $sql = "INSERT INTO tasks (title, description, assigned_to, status, created_by, created_at, updated_at) 
                    VALUES (:title, :description, :assigned_to, :status, :created_by, NOW(), NOW())";

            $command = Yii::app()->db->createCommand($sql);
            $command->bindParam(":title", $title);
            $command->bindParam(":description", $description);
            $command->bindParam(":assigned_to", $assigned_to);
            $command->bindParam(":status", $status);
            $command->bindParam(":created_by", $created_by);

            if ($command->execute()) {
                Yii::app()->user->setFlash('success', 'Task created successfully.');
                $this->redirect(['task/index']);
            } else {
                Yii::app()->user->setFlash('error', 'Failed to create task.');
            }
        }

        $users = Yii::app()->db->createCommand("SELECT id, CONCAT_WS(' ', first_name, last_name) AS full_name FROM users WHERE role = 'user'")->queryAll();
        $this->render('create', ['users' => $users]);
    }


    public function actionUpdate($id)
    {
        if (isset($_POST['Task'])) {
            $sql = "UPDATE tasks 
                    SET title = :title, description = :description, assigned_to = :assigned_to, status = :status, updated_at = NOW()
                    WHERE id = :id";

            $command = Yii::app()->db->createCommand($sql);
            $command->bindParam(":title", $_POST['Task']['title']);
            $command->bindParam(":description", $_POST['Task']['description']);
            $command->bindParam(":assigned_to", $_POST['Task']['assigned_to']);
            $command->bindParam(":status", $_POST['Task']['status']);
            $command->bindParam(":id", $id);

            if ($command->execute()) {
                Yii::app()->user->setFlash('success', 'Task updated successfully.');
                $this->redirect(['task/index']);
            } else {
                Yii::app()->user->setFlash('error', 'Failed to update task.');
            }
        }

        $task = Yii::app()->db->createCommand("SELECT * FROM tasks WHERE id = :id")->bindParam(":id", $id)->queryRow();
        $users = Yii::app()->db->createCommand("SELECT id, CONCAT_WS(' ', first_name, last_name) AS full_name FROM users WHERE role = 'user'")->queryAll();

        $this->render('update', ['task' => $task, 'users' => $users]);
    }

    public function actionDelete($id)
    {
        $sql = "DELETE FROM tasks WHERE id = :id";
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(":id", $id);

        if ($command->execute()) {
            Yii::app()->user->setFlash('success', 'Task deleted successfully.');
        } else {
            Yii::app()->user->setFlash('error', 'Failed to delete task.');
        }

        $this->redirect(['task/index']);
    }
}
