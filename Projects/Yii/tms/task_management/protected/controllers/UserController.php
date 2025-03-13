<?php
class UserController extends Controller
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

        if ($loggedInUserRole == 'user') {
            $users = [];
        } else {
            $users = User::model()->findAll([
                'condition' => 'id != :loggedInUserId AND role = "user"',
                'params' => [':loggedInUserId' => $loggedInUserId],
            ]);
        }

        $this->render('index', ['users' => $users]);
    }
}

?>