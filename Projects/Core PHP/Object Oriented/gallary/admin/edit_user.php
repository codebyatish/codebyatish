<?php include("includes/header.php"); 
    
    $photos = Photo::find_all();

    if (!empty($_GET['id'])) {
        $user = User::find_by_id($_GET['id']);

        if (isset($_POST['update'])) {

            if (!empty($user->id)) {

                $user->username = $_POST['username'];
                $user->first_name = $_POST['first_name'];
                $user->last_name = $_POST['last_name'];
                $user->password = $_POST['password'];
                $user->set_file($_FILES['user_image']);
                $user->save_user_iamge();
                redirect("users.php");
                $session->message("The user has been updated.");

            }

        }


    }else{

        redirect("users.php");
        $session->message("The user has not been updated.");
    }
    

?>

<div class="modal fade" id="photo-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Gallery System Library</h4>
      </div>
      <div class="modal-body">
          <div class="col-md-9">
             <div class="thumbnails row">
            
                <!-- PHP LOOP HERE CODE HERE-->
                <?php


                foreach ($photos as $photo) {

                ?>
                   <div class="col-xs-2">
                     <a role="checkbox" aria-checked="false" tabindex="0" id="" href="#" class="thumbnail">
                       <img class="modal_thumbnails img-responsive" src="<?php echo $photo->picture_path(); ?>" data="<?php echo $photo->id; ?>">
                     </a>
                      <div class="photo-id hidden"></div>
                   </div>

                <?php  } ?>
                    <!-- PHP LOOP HERE CODE HERE-->

             </div>
          </div><!--col-md-9 -->

  <div class="col-md-3">
    <div id="modal_sidebar"></div>
  </div>

   </div><!--Modal Body-->
      <div class="modal-footer">
        <div class="row">
               <!--Closes Modal-->
              <button id="set_user_image" type="button" class="btn btn-primary" disabled="true">Apply Selection</button>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php  include("includes/top_nav.php"); ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php  include("includes/side_nav.php"); ?>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Update User
                            <small>Subheading</small>
                        </h1>
                        <!-- <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol> -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-4">
                                <a href="#" data-toggle="modal" data-target="#photo-modal" class="thumbnail"><img src="<?php echo $user->image_path_and_placeholder(); ?>" class="img-responsive ajax-img"></a>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="file" name="user_image">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" value="<?php echo $user->username; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" value="<?php echo $user->first_name; ?>"  >
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" value="<?php echo $user->last_name; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Enter Password" value="<?php echo $user->password; ?>">
                                </div>
                                <div class="form-group">
                                    <a id="user_id" href="delete_user.php?id=<?php echo $user->id; ?>"  class="btn btn-danger pull-left">Delete User</a>
                                    <input type="submit" name="update" class="btn btn-success pull-right" value="Update User">
                                </div>
                            </div>
                        </form>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<?php include("includes/footer.php"); ?>


<script type="text/javascript">
        

    $(document).ready(function () {
        var user_id;
        var image_name;
        var photo_id;
        $(".modal_thumbnails").click(function () {

            $("#set_user_image").prop('disabled',false);

                var href_user_id = $("#user_id").prop("href");
                var split_href_user_id = href_user_id.split("=");
                user_id = split_href_user_id[split_href_user_id.length - 1];

                var iamge_src = $(this).prop("src");
                var image_href_splitted = iamge_src.split("/");
                image_name = image_href_splitted[image_href_splitted.length - 1];

                photo_id = $(this).attr("data");

                $.ajax({

                url:"ajax_code.php",
                data:{photo_id: photo_id},
                type: "POST",
                    success:function (data) {
                       if (!data.error) {
                            $("#modal_sidebar").html(data.trim());
                       }
                    }
                })

        });


        $("#set_user_image").click(function () {

            $.ajax({
                url:"ajax_code.php",
                data:{image_name: image_name, user_id:user_id},
                type: "POST",
                success:function (data) {
                   if (!data.error) {
                        $(".modal").modal("hide");
                        $(".ajax-img").prop("src",data.trim());
                   }
                }


            })

        });








    });



</script>