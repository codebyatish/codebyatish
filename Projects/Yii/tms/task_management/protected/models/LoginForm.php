<?php
class LoginForm extends CFormModel
{
    public $email;
    public $password;

    public function rules()
    {
        return array(
            array('email, password', 'required'),
            array('email', 'email'),
        );
    }

    public function login()
    {
        $user = User::model()->findByAttributes(array('email' => $this->email));

        if ($user && password_verify($this->password, $user->password)) {
            Yii::app()->user->setState('user_id', $user->id);
            return true;
        }

        $this->addError('password', 'Incorrect email or password.');
        return false;
    }
}
