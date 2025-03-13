<?php
	$conn = mysqli_connect('localhost', 'root', '', 'machine_test') or die('Could not connect to database.');


	if (isset($_GET['delete'])) {
       
       $user_id = $_GET['delete'];

       $delete_query = "DELETE FROM users WHERE id = '$user_id'";

       if (!mysqli_query($conn,$delete_query)) {
            die("QUERY FAILED".mysqli_error($conn));
        }else{
        	header("Location: index.php");
        }
    }


?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DEMO</title>
	<style type="text/css">
		table{

			width: 100%;
			max-width: 100%;
			border-collapse: collapse;
			border-spacing: 0;
		}

		table>tbody>tr>td, table>tbody>tr>th, table>tfoot>tr>td, table>thead>tr>td, table>tfoot>tr>th, table>thead>tr>th{
			padding: 6px !important;
			border: 1px solid black;
			line-height: 1.42857143;
			vertical-align: top;
		} 
	</style>
</head>
<body>


						<form action="" method="post" enctype="multipart/form-data">
							<table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                    	<th>Sr NO.</th>
                                        <th>first Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>User Type</th>
                                        <th>User Photo</th>
                                        <th>Record Delete</th>
                                        <th>With Image Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 


                                        $query = "SELECT * FROM users LIMIT 10";
                                        $query_result = mysqli_query($conn,$query);

                                        $count = 1;

                                        while ($query_result_row = mysqli_fetch_array($query_result)) { 

                                        	$id = $query_result_row['id'];
                                        $firstName = $query_result_row['firstName'];
                                        $LastName = $query_result_row['LastName'];
                                        $email = $query_result_row['email'];
                                        $address = $query_result_row['address'];
                                        $city = $query_result_row['city'];
                                        $State = $query_result_row['State'];
                                        $userType = $query_result_row['userType'];
                                        $userPhoto = $query_result_row['userPhoto'];



                                        ?>

                                            <tr>
                                            	<td><?php echo $count; ?></td> 
                                                <td><?php echo $firstName; ?></td> 
                                                <td><?php echo $LastName; ?></td>
                                                <td><?php echo $email; ?></td>
                                                <td><?php echo $address; ?></td>
                                                <td><?php echo $city; ?></td>
                                                <td><?php echo $State; ?></td>
                                                <td><?php echo $userType; ?></td>
                                                <td><img src='assets/<?php echo $userPhoto; ?>' style='width:100px;'></td>
                                                <td><a href='index.php?delete=<?php echo $id; ?>'>DELETE</a></td>
                                            </tr>
                                      <?php $count++; } ?>
                                    
                                </tbody>
                            </table>

                        </form>


</body>
</html>