<?php
 include 'includes/header.php';

    $last_updated = date("Y-m-d H:i:s");

    if (isset($_GET["id"])) {

			$test_id = $_GET["id"];
			$select_event_query = "SELECT * FROM test_table WHERE status = 'true' ORDER BY sr_no DESC LIMIT 0,1";
			$select_event_query_result = mysqli_query($conn,$select_event_query);
			$select_event_query_result_row = mysqli_fetch_array($select_event_query_result);


			$id = $select_event_query_result_row["id"];
			$sr_no = $select_event_query_result_row["sr_no"];
			$name = $select_event_query_result_row["name"];
			$status = $select_event_query_result_row["status"];

    }



  $update_query = "UPDATE test_table SET sr_no = $sr_no + 1 , name = '$name', status = 'true', last_updated = '$last_updated' WHERE id = $test_id";
if (mysqli_query($conn,$update_query)) {
	echo "SUCCESS";
}



?>