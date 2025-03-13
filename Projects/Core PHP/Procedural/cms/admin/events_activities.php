<?php
    include 'include/header.php';

    $last_updated = date("Y-m-d H:i:s");


    // Insert Query
    if (isset($_POST['add_event'])) {


				$event_name = mysqli_real_escape_string($conn,$_REQUEST["event_name"]);
				$event_date_time = mysqli_real_escape_string($conn,$_REQUEST["event_date_time"]);
				$event_venue = mysqli_real_escape_string($conn,$_REQUEST["event_venue"]);
				$event_description = mysqli_real_escape_string($conn,$_REQUEST["event_description"]);
				$event_pictures = $_FILES['event_pictures']['name'];
				$upload_location = "uploads/";


            $insert_query = "INSERT INTO events_activities (event_name,event_date_time,event_venue,event_description,last_updated) VALUES ('$event_name','$event_date_time','$event_venue','$event_description','$last_updated')";

            if (mysqli_query($conn,$insert_query)) {
            	
            	$last_insert_id = mysqli_insert_id($conn);

            	for ($i=0; $i < count($event_pictures); $i++) { 

            		$event_pictures_name = $last_insert_id."_".$event_pictures[$i];
            		$insert_pictures_query = "INSERT INTO events_pictures (event_id,event_pictures,last_updated) VALUES ('$last_insert_id','$event_pictures_name','$last_updated')";
            		mysqli_query($conn,$insert_pictures_query);

            		$upload_location_path = $upload_location.$last_insert_id."_".$event_pictures[$i];

            		if (!move_uploaded_file($_FILES['event_pictures']['tmp_name'][$i],$upload_location_path)) {
            			die("INNER QUERY FAILED".mysqli_error($conn));          		
            		}


            	}


            }else{
            	die("OUTER QUERY FAILED".mysqli_error($conn));
            }

    }





    // Delete Query
    if (isset($_POST['delete_events'])) {
    	
    	foreach ($_REQUEST['events_array'] as $event_id) {

			$events_delete_query = "DELETE FROM events_activities WHERE event_id = '$event_id'";

			if (mysqli_query($conn,$events_delete_query)) {

				$select_query = "SELECT * FROM events_pictures WHERE event_id = $event_id";
				$select_query_result = mysqli_query($conn,$select_query);

					while ($select_query_row = mysqli_fetch_array($select_query_result)) {

						$pictures_id = $select_query_row["pictures_id"];
						$event_pictures = $select_query_row["event_pictures"];

							$folder = 'uploads';
							$event_pictures_files = glob($folder . '/' . $event_pictures);

							foreach($event_pictures_files as $event_pictures_file){
							    if(is_file($event_pictures_file)){
							        unlink($event_pictures_file);
							    }
							}

					}
				
				$pictures_delete_query = "DELETE FROM events_pictures WHERE event_id = '$event_id'";
				mysqli_query($conn,$pictures_delete_query);

			}


    	}

    }







?>
			
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
						<form action="events_activities.php" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
								        <label for="cat_title">Name of Event</label>
								        <input type="text" name="event_name" id="event_name" placeholder="Please Enter Event Title" class="form-control" required="true">
								    </div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
								        <label for="cat_title">Event Date & Time</label>
								        <input type="text" name="event_date_time" id="event_date_time" placeholder="Please Enter Date & Time" class="form-control" required="true">
								    </div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
								        <label for="cat_title">Event Venue</label>
								        <input type="text" name="event_venue" id="event_venue" placeholder="Please Enter Date & Time" class="form-control" required="true">
								    </div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
								    <label for="cat_title">Event Pictures</label>
										<input type="file" id='event_pictures' name="event_pictures[]" multiple="true" class="form-control" required="true">
									</div>
								</div>
								<div class="col-lg-8 col-md-6">
									<div class="form-group">
								    <label for="cat_title">Event Description</label>
										<textarea  placeholder="Please Enter Event Description" class="form-control" rows="5" name="event_description" id="event_description"  required="true"></textarea>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12 text-center">
									<div class="form-group">
								        <input type="submit" name="add_event" value="Add Event" class="btn btn-primary">
								    </div>
								</div>
							</div>
						</form>
                    </div>
                </div>
                <!-- /.row -->
                <hr>


                <form action="events_activities.php" method="post" enctype="multipart/form-data">
                	<div class="row">
                        <div id="bulk_optopn_container" class="col-xs-4">
                            <input type="submit" name="delete_events" value="DELETE" id="delete_events" class="btn btn-danger" disabled="true">
                        </div>
                    </div>
                    <br>
	                <div class="row">
	                	<div class="col-lg-12">
	                		<div class="table-responsive">
		                		<table class="table table-bordered table-hover">
		                			<thead>
		                                <tr>
		                                	<th><input type="checkbox" name="select_all_boxes" id="select_all_boxes"></th>
		                                	<th>Action</th>
		                                    <th>Event Id</th>
		                                    <th>Event Name</th>
		                                    <th>Event Date & Time</th>
		                                    <th>Event Venue</th>
		                                    <th>Event Pictures</th>
		                                    <th>Last Updated</th>
		                                </tr>
		                            </thead>
		                            <tbody>
			                            <?php

			                				$select_query = "SELECT * FROM events_activities";
			                				$select_query_result = mysqli_query($conn,$select_query);
			                				while ($select_query_row = mysqli_fetch_array($select_query_result)) { 

			                						$event_id = $select_query_row["event_id"];
			                						$event_name = $select_query_row["event_name"];
			                						$event_date_time = $select_query_row["event_date_time"];
			                						$event_venue = $select_query_row["event_venue"];
			                						$event_description = $select_query_row["event_description"];
			                						$last_updated = $select_query_row["last_updated"];

				                				$select_pictures_query = "SELECT * FROM events_pictures WHERE event_id = $event_id";
				                				$select_pictures_query_result = mysqli_query($conn,$select_pictures_query);
				                				$select_pictures_query_num_row = mysqli_num_rows($select_pictures_query_result);
			                				?>	
			                						                				
					                			<tr>
					                				<td><input type='checkbox' name='events_array[]' id='events_array' class='event_check_boxes' value='<?php echo $event_id; ?>'></td>
					                				<td><a href="edit_events_activities.php?id=<?php echo $event_id;?>">View</a></td>
				                            		<td><?php echo $event_id;?></td>
				                            		<td><?php echo $event_name;?></td>
				                            		<td><?php echo $event_date_time;?></td>
				                            		<td><?php echo $event_venue;?></td>
				                            		<td><?php echo $select_pictures_query_num_row;?> Images</td>
				                            		<td><?php echo $last_updated;?></td>
				                            	</tr>

										<?php } ?>
		                            	
		                            </tbody>
		                		</table>
		                	</div>
	                	</div>
	                </div>
	            </form>

            </div>
            <!-- /.container-fluid -->

        </div>
<?php

    include 'include/footer.php';
?>

<script type="text/javascript">
    
    document.getElementById('select_all_boxes').addEventListener('click',function () {
        var event_check_boxes = document.getElementsByClassName('event_check_boxes');

        if (document.getElementById('select_all_boxes').checked == true) 
        {

            for (var i = 0; i < event_check_boxes.length; i++) {
                event_check_boxes[i].checked = true;
                event_check_boxes[i].parentElement.parentNode.style.background = '#ccc';
                document.getElementById('delete_events').disabled = false;
            }

        }
        else{

            for (var i = 0; i < event_check_boxes.length; i++) {
                event_check_boxes[i].checked = false;
                event_check_boxes[i].parentElement.parentNode.style.background = 'initial';
                document.getElementById('delete_events').disabled = true;
            }

        }  


    })






		$(".event_check_boxes").click(function()
		{
			  var flag = 0; 
			  $(".event_check_boxes").each(function()
			  {
			        if($(this).prop('checked') == false)
			        {

			           flag = 1;
						$('#select_all_boxes').prop('checked', false);  
						this.parentElement.parentNode.style.background = 'initial';

						// alert('if'+flag);

			        }else{

			        	this.parentElement.parentNode.style.background = '#ccc';
			        	document.getElementById('delete_events').disabled = false;

			        	// alert('else'+flag);
			        }
			  });


			 // alert('outside'+flag);

			  if (flag == 0) 
			  { 
			       $('#select_all_boxes').prop('checked', true);

			  }
		});





</script>






