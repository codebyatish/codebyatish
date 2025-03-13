<?php
class User extends CActiveRecord
{
    public $confirm_password;

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'users';
    }

    // public function rules()
    // {
    //     return array(
    //         array('first_name, last_name, phone_number, email, password, confirm_password', 'required'),
    //         array('email', 'email'),
    //         array('email', 'unique', 'message' => 'This email is already registered.'),
    //         array('password', 'length', 'min' => 6),
    //         array('confirm_password', 'compare', 'compareAttribute' => 'password', 'message' => 'Passwords do not match.'),
    //     );
    // }
}
?>
