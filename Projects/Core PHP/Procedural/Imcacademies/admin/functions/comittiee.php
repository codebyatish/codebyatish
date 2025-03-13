<?php
include 'database.php';
include 'session.php';

if(empty($_SESSION['id'])) {
    header("Location: ../index.php");
}

$db = new Database();

if(isset($_POST) && isset($_POST['add'])) {
    $user_id = $_SESSION['id'];
    $name = $_POST['name'];
    $type = $_POST['bio'];
    // $link = $_POST['link'];
    $filename = null;

    if(isset($_FILES['image']) && $_FILES['image']['size'] > 0){
        $dir = '../assets/uploads/';
        $filename = time() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $taget_file = $dir . $filename;
        move_uploaded_file($_FILES['image']['tmp_name'], $taget_file);
    }

    $sql = "insert into `comittiee`(`user_id`,`name`,`bio`,`image`) values('$user_id','$name','$type','$filename')";
    mysqli_query($db->conn, $sql);

    // print_r(mysqli_error($db->conn));die;

    header("Location: ../src/comittiee.php");
}

if(isset($_GET['cid'])) {

    $id = $_GET['cid'];
    $img = $_GET['img'] ?? null;
    $sql = "delete from `comittiee` where id='$id'";
    mysqli_query($db->conn, $sql);

    if(!is_null($img)) {
        unlink("../assets/uploads/$img");
    }

    // print_r(mysqli_error($db->conn));die;

    header("Location: ../src/comittiee.php");
}


if(isset($_POST) && isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $type = $_POST['bio'];
    $filename = null;

    if(isset($_FILES['image']) && $_FILES['image']['size'] > 0){
        $dir = '../assets/uploads/';
        $filename = time() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $taget_file = $dir . $filename;
        move_uploaded_file($_FILES['image']['tmp_name'], $taget_file);
    }

    $sql = "update `comittiee` set `name`='$name', `bio`='$type'";
    if(!is_null($filename)) {
        $sql .= ",`image`='$filename'";
    }
    $sql .= "where `id`='$id'";
    
    mysqli_query($db->conn, $sql);

    // print_r(mysqli_error($db->conn));die;

    header("Location: ../src/comittiee.php");
}