<?php

class Database
{
    public $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "u312925529_conference", "Test@123", "u312925529_conference");
    }

    public function test()
    {
        echo "Database ";
        if(!$this->conn) {

            echo "not connected!";
        }else {

            echo "connected.";
        }
    }
}