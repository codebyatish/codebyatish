<?php
  require_once 'dbconfig.php';
  ob_start();
  session_start();
	$e=$_SESSION['username'];


  $tt=0;
  $conn = connect_to_database ('$databaseName');
  if(!$conn)
  {
    echo "Error While Connecting.";
  }
  else
  {
    $sql ="SELECT * FROM orders where cust_id='$e'";
    $result= mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0)
    {
      while($row= mysqli_fetch_assoc($result))
      {
        $ttt = $row['pro_quantity'];
        $tt = $tt + $ttt;
      }
      echo  $tt;
    }
  }
?>