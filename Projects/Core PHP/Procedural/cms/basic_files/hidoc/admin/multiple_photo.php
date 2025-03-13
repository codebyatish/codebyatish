<?php

       include 'include/header.php';


   if (isset($_POST['submit_record'])) {
        
        $name = mysqli_real_escape_string($conn,$_REQUEST['name']);
        $email = mysqli_real_escape_string($conn,$_REQUEST['email']);
        $subjects = $_REQUEST['subjects'];
        $tbl_subjects = implode(",", $subjects);
        $photos = $_FILES['photos']['name'];
        $tbl_photos = implode(",", $photos);
        $photos_temp = $_FILES['photos']['tmp_name'];
        $upload_location = "uploads/";


        $sql = "INSERT INTO demo_multiple (name,email,subjects,photos) VALUES ('$name','$email','$tbl_subjects','$tbl_photos')";
            if (mysqli_query($conn,$sql)) {
                for ($i=0; $i < count($photos); $i++) { 
                   if (move_uploaded_file($_FILES['photos']['tmp_name'][$i], $upload_location.$photos[$i])) {
                       echo "SUCCESS";
                   }
                }
            }
            
   }







?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


<div id="page-wrapper">
    <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add Multiple Photos
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="multiple_photos.php">Multiple Photos</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Add Multiple Photos
                            </li>
                        </ol>
                        
                    </div>
                </div>

                    <div class="form-card">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="photos">Photo</label>
                                    <input type="file" name="photos[]" id='photos' multiple="true">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" placeholder="Please Enter Name" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="last_name">Email</label>
                                    <input type="text" name="email" id="email" placeholder="Please Enter Email" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="subjects">Subject</label>
                                    <select class="selectpicker" multiple data-live-search="true" id="subjects" name="subjects[]">
                                        <option value="Physics">Physics</option>
                                        <option value="Math">Math</option>
                                        <option value="English">English</option>
                                        <option value="Marathi">Marathi</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="form-group">
                                    <input type="submit" name="submit_record" value="Submit" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <hr>

                <div class="form-card">
                    <?php

                        $sel = "SELECT * FROM demo_multiple WHERE id = 5";
                        $select_query_result = mysqli_query($conn,$sel);
                        $select_query_row = mysqli_fetch_array($select_query_result);

                            $id = $select_query_row["id"];
                            $subjects = $select_query_row["subjects"];
                            $photos = explode(",", $select_query_row["photos"]);


                    ?>
                </div>
                    
    </div>
</div>





<?php

       include 'include/footer.php';
?>
