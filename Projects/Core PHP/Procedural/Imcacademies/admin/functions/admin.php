<?php
include 'database.php';
include 'session.php';

if(empty($_SESSION['id'])) {
    header("Location: ../index.php");
}

$db = new Database();


if(isset($_POST)) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "select * from users where email='$email' and password='$password'";
    $data = mysqli_query($db->conn, $sql);
    
    if(mysqli_num_rows($data) > 0) {

        $res = mysqli_fetch_assoc($data);
        $_SESSION['id'] = $res['id'];
        $_SESSION['name'] = $res['name'];
        $_SESSION['email'] = $res['email'];
        header("Location: ../src");
    }else {

        header("Location: ../index.php?msg=fail");
    }

}

if(isset($_GET['type']) && $_GET['type'] == "logout") {
    
    session_destroy();
    header("Location: ../index.php");
}

