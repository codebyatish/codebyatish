<?php

date_default_timezone_set('Asia/Kolkata');
    $conn = mysqli_connect("localhost","root","","demo_database");
    if (!$conn) {
      echo "Database Not Connected";
    }

?>