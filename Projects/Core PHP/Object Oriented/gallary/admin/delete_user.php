<?php 
        include("includes/init.php"); 
       (!$session->is_signed_in()) ? redirect("login.php") : "" ;

       if (empty($_GET['id'])) {
           redirect("users.php");
       }

       $user = User::find_by_id($_GET['id']);

       if ($user) {
            $session->message("The {user->username} has been deleted.");
            $user->del_photo();
            redirect("users.php");
       }else{
            redirect("users.php");
       }

?>
