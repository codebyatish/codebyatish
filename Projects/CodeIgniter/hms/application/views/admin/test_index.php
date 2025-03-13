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
                <h1 class="page-header">Tests</h1>
                <div class="alert alert-success alert-dismissible" id="notification_alert" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <span id="notification_alert_msg"></span>
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
        <div class="modal fade bd-example-modal-md-create" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="form-model">
            <div class="modal-dialog modal-md">
                <form id="create_form">
                    <div class="modal-content">
                        <div class="model-primary modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">CREATE TEST</h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="test_name">Test Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Test Name" name="test_name" required="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="text-align: center;">
                            <input type="submit" name="submit" class="btn btn-md btn-success" value="Create Test">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Update User Modal -->
        <div class="modal fade bd-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="update-form-model">
            <div class="modal-dialog modal-md">
                <form id="update_form">
                    <div class="modal-content">
                        <div class="model-primary modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">UPDATE TEST</h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="test_name">Test Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Test Name" name="test_name" required="true" id="test_name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="text-align: center;">
                            <input type="hidden" name="test_id" id="test_id">
                            <input type="submit" name="submit" class="btn btn-md btn-success" value="Update Test">
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
                        <button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target=".bd-example-modal-md-create">Add Test</button>
                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-danger">Delete User</a> -->
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Test Name</th>
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
            'ajax' : '<?php echo base_url('tests/load_datatable'); ?>',
            'order' : []
        });
    });


    $("#create_form").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url('tests/create'); ?>",
            data: $("#create_form").serialize(),
            type: "post",
            async: false,
            dataType: 'json',
            success: function(response){
                $('#form-model').modal('hide');
                $('#create_form')[0].reset();
                $('#notification_alert_msg').empty().append("New Test Added Successfully .. !!");
                $('#notification_alert').slideDown();
                $('#dataTables-example').DataTable().ajax.reload();
            },
            error: function()
            {
                alert("error");
           }
        });
    });


    function edit_test(test_id) {
        //alert(test_id);
       
        $.ajax({
            url: "<?php echo base_url('tests/get_data_for_edit');?>",
            method: "post",
            data: {test_id:test_id},
            dataType: 'json',
            success: function(response){
                $('#test_id').val(response.Id);
                $('#test_name').val(response.TestName);
                $('#update-form-model').modal('show');
            },
            error: function()
            {
                alert("error");
            }
        });

    }


    $("#update_form").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url('tests/update'); ?>",
            data: $("#update_form").serialize(),
            type: "post",
            async: false,
            dataType: 'json',
            success: function(response){
                $('#update-form-model').modal('hide');
                $('#update_form')[0].reset();
                $('#notification_alert_msg').empty().append("Test Updated Successfully .. !!");
                $('#notification_alert').slideDown();
                $('#dataTables-example').DataTable().ajax.reload();
              },
           error: function()
           {
            alert("error");
           }
        });
    });



    function delete_test(test_id) {
         $.ajax({
            url: "<?php echo base_url('tests/delete_data');?>",
            method: "post",
            data: {test_id:test_id},
            dataType: 'json',
            success: function(response){
                $('#notification_alert_msg').empty().append("Test Deleted Successfully .. !!");
                $('#notification_alert').slideDown();
                $('#dataTables-example').DataTable().ajax.reload();
            },
            error: function()
            {
                alert("error");
            }
        });
    }

</script>
