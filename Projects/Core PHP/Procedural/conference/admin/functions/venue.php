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
    $loc = $_POST['location'];
    $filenames = null;

    if(isset($_FILES['image']) && count($_FILES['image']['name']) > 0){

        $dir = '../assets/uploads/';
        for($i=0; $i<count($_FILES['image']['name']); $i++ ) {
            $filename = time() . '.' . pathinfo($_FILES['image']['name'][$i], PATHINFO_EXTENSION);
            $taget_file = $dir . $filename;
            move_uploaded_file($_FILES['image']['tmp_name'][$i], $taget_file);
            
            $filenames .= !is_null($filenames) ? "," : "";
            $filenames .= $filename;
        }
    }

    $sql = "insert into `venue`(`user_id`,`name`,`location`,`images`) values('$user_id','$name','$loc','$filenames')";
    mysqli_query($db->conn, $sql);

    // print_r(mysqli_error($db->conn));die;

    header("Location: ../src/venue.php");
}

if(isset($_GET['cid'])) {

    $id = $_GET['cid'];
    $img = $_GET['img'] ?? null;
    $sql = "delete from `venue` where id='$id'";
    mysqli_query($db->conn, $sql);

    if(!is_null($img)) {
        $imgs = explode(",", $img);
        foreach($imgs as $img) {
            unlink("../assets/uploads/$img");
        }
    }

    header("Location: ../src/venue.php");
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

    $sql = "update `venue` set `name`='$name', `type`='$type', `link`='$link'";
    if(!is_null($filename)) {
        $sql .= ",`image`='$filename'";
    }
    $sql .= "where `id`='$id'";
    
    mysqli_query($db->conn, $sql);

    // print_r(mysqli_error($db->conn));die;

    header("Location: ../src/venue.php");
}