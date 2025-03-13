<?php

class AuthController extends Controller
{
    public function actionLogin()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = User::model()->findByAttributes(['email' => $email]);

            if ($user && password_verify($password, $user->password)) {
                Yii::app()->user->setState('user_id', $user->id);
                Yii::app()->user->setState('user_name', $user->first_name . ' ' . $user->last_name);
                Yii::app()->user->setState('user_email', $user->email);
                Yii::app()->user->setState('user_role', $user->role);
                Yii::app()->user->setFlash('success', 'Login successful.');
                $this->redirect(['admin/dashboard']);
            } else {
                Yii::app()->user->setFlash('error', 'Invalid email or password.');
            }
        }

        $this->render('login');
    }


    public function actionRegister()
    {
        $model = new User;

        if (isset($_POST['register_user'])) {
            $model->first_name = $_POST['first_name'];
            $model->last_name = $_POST['last_name'];
            $model->phone_number = $_POST['phone_number'];
            $model->email = $_POST['email'];
            $model->password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT);
            $model->role = 'user';
            if ($model->save()) {
                Yii::app()->user->setFlash('success', 'Registration successful! You can now login.');
                $this->redirect(['auth/login']);
            } else {
                Yii::app()->user->setFlash('error', 'Registration failed. Please check the form.');
                print_r($model->errors); // Debugging
                exit;
            }
        }

        $this->render('register', ['model' => $model]);
    }


    public function actionLogout()
    {   
        Yii::app()->user->logout(); // Logout the user
        Yii::app()->user->setFlash('success', 'You have been logged out.');
        $this->redirect(Yii::app()->createUrl('auth/login')); // Redirect to login page;
    }
}
