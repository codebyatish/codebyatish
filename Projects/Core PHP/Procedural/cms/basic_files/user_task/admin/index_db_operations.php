<?php

    include '../includes/db.php';

            $site_logo = $_FILES['site_logo']['name'];
            $site_logo_temp = $_FILES['site_logo']['tmp_name'];
            $site_title = mysqli_real_escape_string($conn,$_REQUEST['site_title']);
            $about_us_heading = mysqli_real_escape_string($conn,$_REQUEST['about_us_heading']);
            $about_us_content = mysqli_real_escape_string($conn,$_REQUEST['about_us_content']);
            $last_updated = date("Y-m-d H:i:s");


            $insert_query = "INSERT INTO home_page (site_logo,site_title,about_us_heading,about_us_content,last_updated) VALUES ('$site_logo','$site_title','$about_us_heading','$about_us_content','$last_updated')";
            if (mysqli_query($conn,$insert_query)) {

                if (move_uploaded_file($site_logo_temp, "uploads/$site_logo")) {
                    echo "SUCCESS";
                }else{
                    echo "I_FAIL";
                }
                
            }else{
                echo "O_FAIL";
            }


?>