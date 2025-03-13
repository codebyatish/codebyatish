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
    $type = $_POST['type'];
    $link = $_POST['link'];
    $filename = null;

    if(isset($_FILES['image']) && $_FILES['image']['size'] > 0){
        $dir = '../assets/uploads/';
        $filename = time() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $taget_file = $dir . $filename;
        move_uploaded_file($_FILES['image']['tmp_name'], $taget_file);
    }

    $sql = "insert into `speaker`(`user_id`,`name`,`link`,`type`,`image`) values('$user_id','$name','$link','$type','$filename')";
    mysqli_query($db->conn, $sql);

    // print_r(mysqli_error($db->conn));die;

    header("Location: ../src/speaker.php");
}

if(isset($_GET['cid'])) {

    $id = $_GET['cid'];
    $img = $_GET['img'] ?? null;
    $sql = "delete from `speaker` where id='$id'";
    mysqli_query($db->conn, $sql);

    if(!is_null($img)) {
        unlink("../assets/uploads/$img");
    }

    // print_r(mysqli_error($db->conn));die;

    header("Location: ../src/speaker.php");
}


if(isset($_POST) && isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $link = $_POST['link'];
    $filename = null;

    if(isset($_FILES['image']) && $_FILES['image']['size'] > 0){
        $dir = '../assets/uploads/';
        $filename = time() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $taget_file = $dir . $filename;
        move_uploaded_file($_FILES['image']['tmp_name'], $taget_file);
    }

    $sql = "update `speaker` set `name`='$name', `type`='$type', `link`='$link'";
    if(!is_null($filename)) {
        $sql .= ",`image`='$filename'";
    }
    $sql .= "where `id`='$id'";
    
    mysqli_query($db->conn, $sql);

    // print_r(mysqli_error($db->conn));die;

    header("Location: ../src/speaker.php");
}