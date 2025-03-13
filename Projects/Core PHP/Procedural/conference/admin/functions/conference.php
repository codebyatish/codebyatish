<?php
include 'database.php';
include 'session.php';

if(empty($_SESSION['id'])) {
    header("Location: ../index.php");
}

$db = new Database();

if(isset($_POST) && isset($_POST['add'])) {
    $user_id = $_SESSION['id'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $speaker = $_POST['speaker'];
    $link = $_POST['link'];
    $dt = date("Y-m-d H:i:s", strtotime($_POST['datetime']));
    $filename = null;

    if(isset($_FILES['image']) && $_FILES['image']['size'] > 0){
        $dir = '../assets/uploads/';
        $filename = time() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $taget_file = $dir . $filename;
        move_uploaded_file($_FILES['image']['tmp_name'], $taget_file);
    }

    $sql = "insert into `conference`(`user_id`,`title`,`speaker`,`link`,`desc`,`image`,`date_time`) values('$user_id','$title','$speaker','$link','$desc','$filename','$dt')";
    mysqli_query($db->conn, $sql);

    // print_r(mysqli_error($db->conn));die;

    header("Location: ../src/conference.php");
}

if(isset($_GET['cid'])) {

    $id = $_GET['cid'];
    $img = $_GET['img'] ?? null;
    $sql = "delete from `conference` where id='$id'";
    mysqli_query($db->conn, $sql);

    if(!is_null($img)) {
        unlink("../assets/uploads/$img");
    }

    // print_r(mysqli_error($db->conn));die;

    header("Location: ../src/conference.php");
}


if(isset($_POST) && isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $speaker = $_POST['speaker'];
    $link = $_POST['link'];
    $dt = date("Y-m-d H:i:s", strtotime($_POST['datetime']));
    $filename = null;

    if(isset($_FILES['image']) && $_FILES['image']['size'] > 0){
        $dir = '../assets/uploads/';
        $filename = time() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $taget_file = $dir . $filename;
        move_uploaded_file($_FILES['image']['tmp_name'], $taget_file);
    }

    $sql = "update `conference` set `title`='$title', `speaker`='$speaker', `link`='$link', `desc`='$desc', `date_time`='$dt'";
    if(!is_null($filename)) {
        $sql .= ",`image`='$filename'";
    }
    $sql .= "where `id`='$id'";
    
    mysqli_query($db->conn, $sql);

    // print_r(mysqli_error($db->conn));die;

    header("Location: ../src/conference.php");
}