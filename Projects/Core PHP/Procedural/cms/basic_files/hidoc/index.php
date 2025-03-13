<?php

   include 'includes/header.php';

        $select_query = "SELECT * FROM digital_cards ORDER BY id DESC";
        $select_query_result = mysqli_query($conn,$select_query);

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dynamic Profile Cards</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>



  <div class="container">
    <div class="row">
      <?php

      ;
      while ($select_query_result_row = mysqli_fetch_array($select_query_result)) {

            $profile_photo = $select_query_result_row['profile_photo'];
            $first_name = $select_query_result_row['first_name'];
            $last_name = $select_query_result_row['last_name'];
            $designation = $select_query_result_row['designation'];
            $mobile_number = $select_query_result_row['mobile_number'];
            $email_id = $select_query_result_row['email_id'];
            $address = $select_query_result_row['address'];
            $linedin_link = $select_query_result_row['linedin_link'];
            $twitter_link = $select_query_result_row['twitter_link'];
            $instagram_link = $select_query_result_row['instagram_link'];
            $whats_app_number = $select_query_result_row['whats_app_number'];

      ?>
      <div class="col-md-4">
        <div class="wrapper">
          <div class="profile">
            <img src="images/<?php echo $profile_photo; ?>" class="thumbnail">
            <h3 class="name"><?php echo $first_name." ".$last_name; ?></h3>
            <p class="title"><?php echo $designation; ?></p> 
            <div class="profile-add">
              <table class="table">
                <tr>
                  <td><i class="fa fa-phone"></i></td>
                  <td><?php echo $mobile_number; ?></td>
                </tr>
                <tr>
                  <td><i class="fa fa-envelope"></i></td>
                  <td><?php echo $email_id; ?></td>
                </tr>
                <tr>
                  <td><i class="fa fa-map-marker"></i></td>
                  <td><?php echo $address; ?></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="social-icons">
            <a class="btn btn-primary" style="background-color: #0082ca;border:none;" href="<?php echo $linedin_link; ?>" role="button">
              <i class="fa fa-linkedin"></i>
            </a>
            <a class="btn btn-primary" style="background-color: #55acee;border:none;" href="<?php echo $twitter_link; ?>" role="button">
              <i class="fa fa-twitter"></i>
            </a>
            <a class="btn btn-primary" style="background-color: #ac2bac;border:none;" href="<?php echo $instagram_link; ?>" role="button">
              <i class="fa fa-instagram"></i>
            </a>
            <a class="btn btn-primary" style="background-color: #25d366;border:none;" href="https://api.whatsapp.com/send?phone=91<?php echo $whats_app_number; ?>&text=Hello, <?php echo $first_name." ".$last_name; ?>" role="button">
              <i class="fa fa-whatsapp"></i>
            </a>
            <a class="btn btn-primary share_link_btn" style="background-color: #000000;border:none;" href="#" role="button">
              <i class="fa fa-paper-plane"></i>
            </a>
            <div id="share_div" style="display: none;position: absolute;bottom: 8%;">
                <label>Copy To Share</label>
                <input type="text" name="share_link" id="share_link">
            </div>
          </div>

        </div>
      </div>

    <?php   }  ?>
    </div>
  </div>


<script type="text/javascript">
    
    var base_url = window.location.href;
    var share_link_btn = document.getElementsByClassName('share_link_btn');

    for (var i = 0; i < share_link_btn.length; i++) {
      
      share_link_btn[i].addEventListener('click',function () {
      // console.log(this.nextElementSibling.lastElementChild.value);
        this.nextElementSibling.style.display = "block";
        this.nextElementSibling.lastElementChild.value = base_url;

      })

    }
    // document.getElementsByClassName('share_link_btn').addEventListener('click',function () {

      

    //   document.getElementById('share_div').style.display = "block";

    //   var base_url = window.location.href;
    //   console.log(base_url);

    // })
 




</script>
</body>
</html>
