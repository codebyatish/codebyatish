<?php
    include 'include/header.php';

    $last_updated = date("Y-m-d H:i:s");

    	$event_id = $_GET["id"];
		$select_event_query = "SELECT * FROM events_activities WHERE event_id = '$event_id'";
		$select_event_query_result = mysqli_query($conn,$select_event_query);
		$select_event_query_result_row = mysqli_fetch_array($select_event_query_result);


			$original_event_id = $select_event_query_result_row["event_id"];
			$event_name = $select_event_query_result_row["event_name"];
			$event_date_time = $select_event_query_result_row["event_date_time"];
			$event_venue = $select_event_query_result_row["event_venue"];
			$event_description = $select_event_query_result_row["event_description"];


				if (isset($_POST['update_event'])) {
					
					$event_name = mysqli_real_escape_string($conn,$_REQUEST["event_name"]);
					$event_date_time = mysqli_real_escape_string($conn,$_REQUEST["event_date_time"]);
					$event_venue = mysqli_real_escape_string($conn,$_REQUEST["event_venue"]);
					$event_description = mysqli_real_escape_string($conn,$_REQUEST["event_description"]);
					$event_pictures = $_FILES['event_pictures']['name'];
					$upload_location = "uploads/";

					$update_query = "UPDATE events_activities SET event_name = '$event_name', event_date_time = '$event_date_time', event_venue = '$event_venue', event_description = '$event_description', last_updated = '$last_updated' WHERE event_id = '$event_id'";

					if (mysqli_query($conn,$update_query)) {

						for ($i=0; $i < count($event_pictures); $i++) { 

							if (!empty($event_pictures[$i])) {
								$event_pictures_name = $event_id."_".$event_pictures[$i];
			            		$insert_pictures_query = "INSERT INTO events_pictures (event_id,event_pictures,last_updated) VALUES ('$event_id','$event_pictures_name','$last_updated')";
			            		mysqli_query($conn,$insert_pictures_query);

			            		$upload_location_path = $upload_location.$event_id."_".$event_pictures[$i];

			            		if (!move_uploaded_file($_FILES['event_pictures']['tmp_name'][$i],$upload_location_path)) {
			            			die("INNER QUERY FAILED".mysqli_error($conn));          		
			            		}
							}
								
		            	}
					}

				}



		if (isset($_POST['pictures_id'])) {
	       
			$pictures_id = $_POST['pictures_id'];

			$select_query = "SELECT * FROM events_pictures WHERE pictures_id = $pictures_id";
			$select_query_result = mysqli_query($conn,$select_query);
			$select_query_row = mysqli_fetch_array($select_query_result);

				$pictures_id = $select_query_row["pictures_id"];
				$event_pictures = $select_query_row["event_pictures"];


			$delete_query = "DELETE FROM events_pictures WHERE pictures_id = '$pictures_id'";
			if (mysqli_query($conn,$delete_query)) {
				
				unlink("uploads/".$event_pictures);

			}
			
	    }       




	    $select_query = "SELECT * FROM events_pictures WHERE event_id = $event_id";
		$select_query_result = mysqli_query($conn,$select_query);
		$select_query_result_num_rows = mysqli_num_rows($select_query_result);

?>
<style type="text/css">
	input.custom_box {
   transform : scale(2);
   margin-top: 8px;
}

.table tbody td{
	vertical-align: middle;
	text-align: center;
}
.table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {
    border: 1px solid #828282;
}
</style>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Author</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Events & Activities
                            </li>
                        </ol>
						<form action="" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
								        <label for="cat_title">Name of Event</label>
								        <input type="text" name="event_name" id="event_name" placeholder="Please Enter Event Title" class="form-control" required="true" value="<?php echo $event_name; ?>">
								    </div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
								        <label for="cat_title">Event Date & Time</label>
								        <input type="text" name="event_date_time" id="event_date_time" placeholder="Please Enter Date & Time" class="form-control" required="true" value="<?php echo $event_date_time; ?>">
								    </div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
								        <label for="cat_title">Event Venue</label>
								        <input type="text" name="event_venue" id="event_venue" placeholder="Please Enter Date & Time" class="form-control" required="true" value="<?php echo $event_venue; ?>">
								    </div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
								    <label for="cat_title">Event Description</label>
										<textarea  placeholder="Please Enter Event Description" class="form-control" rows="5" name="event_description" id="event_description"  required="true"><?php echo $event_description; ?></textarea>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
								    <label for="cat_title">Event Pictures</label>
										<input type="file" id='event_pictures' name="event_pictures[]" multiple="true" class="form-control">
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
										<label for="cat_title">Existing Event Pictures</label>
								    	<p><?php echo $select_query_result_num_rows; ?> File Selected</p>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-12 text-center">
									<div class="form-group">
										<button name="update_event" class="btn btn-success" >Update Event</button>
								    </div>
								</div>
							</div>
						</form>

							<hr>

							<form action="" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-2">
										<h3>Select All</h3>
									</div>
									<div class="col-md-1" style="padding-top: 16px;">
										<input type='checkbox' name='events_pictures_all_array[]' id='events_pictures_all_array' class='event_pictures_check_boxes custom_box'>
									</div>
									<div class="col-md-2" style="padding-top: 16px;">
										<input type="button" name="delete_pictures" value="Delete Pictures" id="delete_pictures" class="btn btn-danger" style="display: none;">
									</div>
								</div>
								<br>
								<div class="row">
									<?php
									$count = 0;
										while ($select_query_row = mysqli_fetch_array($select_query_result)) {

												$pictures_id = $select_query_row["pictures_id"];
												$event_pictures = $select_query_row["event_pictures"];
												
									?>
										<div class="col-lg-3 col-md-6">
											<table class="table table-bordered">
												<tr>
													<td colspan="2">
														<img src="uploads/<?php echo $event_pictures; ?>" style="width:200px;height: 200px;">
													</td>
												</tr>
												<tr>
													<td><input type='checkbox' name='event_pictures_check_box[]' id='event_pictures_check_box' class='event_pictures_check_box custom_box' value='<?php echo $pictures_id; ?>' attr="<?php echo $count; ?>" ></td>
													<td><button name="pictures_id" value="<?php echo $pictures_id; ?>" class="btn btn-danger btn-sm" style="width: 100%;" >DELETE</button></td>
												</tr>
											</table>
										</div>
									<?php $count++; } ?>
								</div>

							</form>
							
                    </div>
                </div>
                <!-- /.row -->
                <hr>


            </div>
            <!-- /.container-fluid -->

        </div>
<?php

    include 'include/footer.php';
?>

<script type="text/javascript">
    document.getElementById('events_pictures_all_array').addEventListener('click',function () {
        var event_pictures_check_box = document.getElementsByClassName('event_pictures_check_box');

        if (document.getElementById('events_pictures_all_array').checked == true) 
        {

            for (var i = 0; i < event_pictures_check_box.length; i++) {
                event_pictures_check_box[i].checked = true;
                document.getElementById('delete_pictures').style.display = 'block';
            }

        }
        else{

            for (var i = 0; i < event_pictures_check_box.length; i++) {
                event_pictures_check_box[i].checked = false;
                 document.getElementById('delete_pictures').style.display = 'none';
            }

        }  


    })





const event_pictures_check_box = document.getElementsByClassName('event_pictures_check_box');
var count = 1;
var checkbox_array = [];
for (var i = 0; i < event_pictures_check_box.length; i++) {
    event_pictures_check_box[i].addEventListener('click', function(){
       
    		if (this.checked == true) 
    		{	
    			var countattr = this.getAttribute("attr");
    			checkbox_array.push(countattr);
    	
    			console.log(count +"--"+ event_pictures_check_box.length);
    			count++;
    		}else{

    			for (var j = 0; j < checkbox_array.length; j++) {
    				if (checkbox_array[j] == this.getAttribute("attr")) 
    				{
    					var index = j;
    					checkbox_array.splice(index,i);
    				}
    			}

    		}


			if (checkbox_array.length <= 1 ) 
			{
			 	document.getElementById('delete_pictures').style.display = 'none';
			}else{
				document.getElementById('delete_pictures').style.display = 'block';
			}

    })
    
}










</script>






