<?php
class AdminController extends Controller
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

    public function actionDashboard()
    {
        $loggedInUserId = Yii::app()->user->getState('user_id');
        $loggedInUserRole = Yii::app()->user->getState('user_role');

        if ($loggedInUserRole == 'admin') {
            // Admin: Fetch all users and tasks
            $totalUsers = Yii::app()->db->createCommand()
                ->select('COUNT(*)')
                ->from('users')
                ->where('role = :role', [':role' => 'user'])
                ->queryScalar();

            $totalTasks = Yii::app()->db->createCommand()
                ->select('COUNT(*)')
                ->from('tasks')
                ->queryScalar();
        } else {
            // Normal User: Fetch only their assigned tasks
            $totalUsers = 0; // Normal users shouldn't see user count

            $totalTasks = Yii::app()->db->createCommand()
                ->select('COUNT(*)')
                ->from('tasks')
                ->where('assigned_to = :userId', [':userId' => $loggedInUserId])
                ->queryScalar();
        }

        $this->render('dashboard', [
            'totalUsers' => $totalUsers,
            'totalTasks' => $totalTasks,
        ]);
    }

}
