<?php
class Task extends CActiveRecord
{
    public function tableName()
    {
        return 'tasks';
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
