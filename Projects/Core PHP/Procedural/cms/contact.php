<?php              
     include "includes/header.php";                                                                                                                                                                                                                                         
         if (isset($_POST['submit'])) {                                               

            $to = "jaiwalatish@gmail.com";
            $subject = mysqli_real_escape_string($conn,$_REQUEST['subject']);
            $body = mysqli_real_escape_string($conn,$_REQUEST['body']);

            






        }


?>

    <!-- Navigation -->
    
    
 
    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Contact</h1>
                    <form role="form" action="" method="post" id="login-form" autocomplete="off">
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label for="subject" class="sr-only">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Your Subject">
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <textarea name="body" id="body" rows="8" class="form-control" style="resize: none;" placeholder="Enter Your Message"></textarea>
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Send">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


        <hr>



<?php

    include 'includes/footer.php';

?>
