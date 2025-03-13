<?php include 'header.php';?>

<style type="text/css">
    .model-primary{
        background-color: #337ab7;
        color: white;
        border: 1px solid #337ab7 !important;
    }

    .model-primary button{
        color: white;
        opacity: 1;
    }

    .modal-backdrop{
        height: 100vh !important;
    }

    .dataTable {
        width: 100% !important;
    }
</style>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users</h1>
                <div class="alert alert-success alert-dismissible" id="delete_alert" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Your Record Deleted Successfully !!
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->


        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="model-primary modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="modal_heading">Record Inserted Successfully</h4>
                    </div>
                    <div class="modal-body" id="modal_body">
                        Your Record has been inserted successfully !!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Create User Modal -->
        <div class="modal fade bd-example-modal-lg-create" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="form-model">
            <div class="modal-dialog modal-lg">
                <form id="create_user_form">
                    <div class="modal-content">
                        <div class="model-primary modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">CREATE USER</h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="first_name">First Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Your First Name" name="first_name" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="last_name">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Last Name" name="last_name" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="last_name">Email Id</label>
                                                <input type="email" class="form-control" placeholder="Enter Your Email Id" name="email_id" required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Username" name="username" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Password" name="password" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="user_role">Select User Role</label>
                                                <select class="form-control" name="user_role" required="true">
                                                    <option value="">Select User Role</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="employee">Employee</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="text-align: center;">
                            <input type="submit" name="submit" class="btn btn-md btn-success" value="Create User">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Update User Modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="update-form-model">
            <div class="modal-dialog modal-lg">
                <form id="update_user_form">
                    <div class="modal-content">
                        <div class="model-primary modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">UPDATE USER</h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Your First Name" name="first_name" required="true" id="first_name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Last Name" name="last_name" required="true" id="last_name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="last_name">Email Id</label>
                                            <input type="email" class="form-control" placeholder="Enter Your Email Id" name="email_id" required="true" id="email_id">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Username" name="username" required="true" id="username">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Password" name="password" required="true" id="password">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="user_role">Select User Role</label>
                                            <select class="form-control" name="user_role" required="true" id="user_role">
                                                <option value="">Select User Role</option>
                                                <option value="admin">Admin</option>
                                                <option value="employee">Employee</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="text-align: center;">
                            <input type="hidden" name="user_id" id="user_id">
                            <input type="submit" name="submit" class="btn btn-md btn-success" value="Update User">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg-create">Add User</button>
                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-danger">Delete User</a> -->
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Username</th>
                                        <th>User Full Name</th>
                                        <th>Email Id</th>
                                        <th>User Role</th>
                                        <th>Last Updated</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>




<?php include 'footer.php'; ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            'ajax' : '<?php echo base_url('users/load_datatable'); ?>',
            'order' : []
        });
    });


    $("#create_user_form").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url('users/create'); ?>",
            data: $("#create_user_form").serialize(),
            type: "post",
            async: false,
            dataType: 'json',
            success: function(response){

                $('#form-model').modal('hide');
                $('#create_user_form')[0].reset();
                $('#myModal').modal('show');
                $('#dataTables-example').DataTable().ajax.reload();
              },
           error: function()
           {
            alert("error");
           }
        });
    });


    function edit_user(user_id) {
        //alert(user_id);
       
        $.ajax({
            url: "<?php echo base_url('users/get_data_for_edit');?>",
            method: "post",
            data: {user_id:user_id},
            dataType: 'json',
            success: function(response){
                $('#user_id').val(response.Id);
                $('#first_name').val(response.FirstName);
                $('#last_name').val(response.LastName);
                $('#email_id').val(response.EmailId);
                $('#username').val(response.UserName);
                $('#password').val(response.Password);
                $('#user_role').val(response.UserRole);
                $('#update-form-model').modal('show');
            },
            error: function()
            {
                alert("error");
            }
        });

    }


    $("#update_user_form").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url('users/update'); ?>",
            data: $("#update_user_form").serialize(),
            type: "post",
            async: false,
            dataType: 'json',
            success: function(response){
                $('#update-form-model').modal('hide');
                $('#update_user_form')[0].reset();
                $('#myModal').modal('show');
                $('#modal_heading').empty().append("Record Updated Successfully");
                $('#modal_body').empty().append("Your Record has been updated successfully !!");
                $('#dataTables-example').DataTable().ajax.reload();
              },
           error: function()
           {
            alert("error");
           }
        });
    });



    function delete_user(user_id) {
         $.ajax({
            url: "<?php echo base_url('users/delete_data');?>",
            method: "post",
            data: {user_id:user_id},
            dataType: 'json',
            success: function(response){
                $('#delete_alert').slideDown();
                $('#dataTables-example').DataTable().ajax.reload();
            },
            error: function()
            {
                alert("error");
            }
        });
    }

</script>
