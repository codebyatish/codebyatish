<?php
include 'database.php';
include 'session.php';

if(empty($_SESSION['id'])) {
    header("Location: ../index.php");
}

$db = new Database();

if(isset($_POST) && isset($_POST['add'])) {
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $gmail = $_POST['gmail'];
    $linkedin = $_POST['linkedin'];
    $id = $_POST['id'];


    if($id == "") {

        $sql = "insert into `social`(`facebook`,`twitter`,`gmail`,`linkedin`) values('$facebook','$twitter','$gmail','$linkedin')";
    }else {

        $sql = "update `social` set `facebook`='$facebook', `twitter`='$twitter', `gmail`='$gmail', `linkedin`='$linkedin' where `id`='$id'";
    }

    mysqli_query($db->conn, $sql);

    // print_r(mysqli_error($db->conn));die;

    header("Location: ../src/add_social.php");
}

if(isset($_GET['cid'])) {

    $id = $_GET['cid'];
    $img = $_GET['img'] ?? null;
    $sql = "delete from `social` where id='$id'";
    mysqli_query($db->conn, $sql);

    // print_r(mysqli_error($db->conn));die;

    header("Location: ../src/social.php");
}


if(isset($_POST) && isset($_POST['update'])) {
    $id = $_POST['id'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $gmail = $_POST['gmail'];
    $linkedin = $_POST['linkedin'];

    $sql = "update `social` set `facebook`='$facebook', `twitter`='$twitter', `gmail`='$gmail', `gmail`='$gmail' where `id`='$id'";
    
    mysqli_query($db->conn, $sql);

    // print_r(mysqli_error($db->conn));die;

    header("Location: ../src/social.php");
}