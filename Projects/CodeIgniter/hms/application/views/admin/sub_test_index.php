<?php include 'header.php'; ?>
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
                <h1 class="page-header">Sub Tests</h1>
                <div class="alert alert-success alert-dismissible" id="notification_alert" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <span id="notification_alert_msg"></span>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        

        <!-- Create User Modal -->
        <div class="modal fade bd-example-modal-lg-create" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="form-model">
            <div class="modal-dialog modal-lg">
                <form id="create_form">
                    <div class="modal-content">
                        <div class="model-primary modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">CREATE SUB TEST</h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Select Test</label>
                                        <select class="form-control selectpicker" data-live-search="true" required="true" name="test_id">
                                            <option value="">Select Test</option>
                                            <?php 

                                                foreach ($data as $key => $value) { ?>

                                                    <option value="<?php echo $value['Id'];?>"><?php echo $value['TestName'];?></option>

                                            <?php  } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sub_test_name">Sub Test Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Sub Test Name" name="sub_test_name" required="true">
                                        </div>
                                    </div>
                                </div>


                                <hr>


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                          <div class="panel-heading">Add Sub Test Input Fields</div>
                                            <div class="panel-body">
                                                <div class="row" style="text-align: right;">
                                                    <div class="col-lg-12">
                                                        <input type="button" class="btn btn-primary" id="sub_test_input_table_add_new_row" value="Add Row"/>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                         <table  id="sub_test_input_table" class="table table-striped table-bordered table-hover sub_test_input_table">
                                                              <thead> 
                                                                <tr>
                                                                  <th>Input Label Name</th>
                                                                  <th>Action</th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                <tr>
                                                                    <input type="hidden" id="num_row" value="0" name="num_row[]" class="form-control" />
                                                                    <td><input type="text" id="input_label_name"  name="input_label_name[]" class="form-control" placeholder="Please Enter here label Name"/></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                         </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="modal-footer" style="text-align: center;">
                            <input type="submit" name="submit" class="btn btn-md btn-success" value="Create Sub Test">
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
                            <h4 class="modal-title" id="myModalLabel">UPDATE SUB TEST</h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="test_id">Select Test</label>
                                        <select class="form-control selectpicker" id="test_id" data-live-search="true" required="true" name="test_id">
                                            <option value="">Select Test</option>
                                            <?php 

                                                foreach ($data as $key => $value) { ?>

                                                    <option value="<?php echo $value['Id'];?>"><?php echo $value['TestName'];?></option>

                                            <?php  } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sub_test_name">Sub Test Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Sub Test Name" name="sub_test_name" id="sub_test_name" required="true">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="text-align: center;">
                            <input type="hidden" name="sub_test_id" id="sub_test_id">
                            <input type="submit" name="submit" class="btn btn-md btn-success" value="Update Sub Test">
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
                        <a href="<?php echo base_url("sub_tests/sub_test"); ?>" class="btn btn-md btn-primary" >Add Sub Test</a>
                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-danger">Delete User</a> -->
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Test Name</th>
                                        <th>Sub Test Name</th>
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



Port 3306 in use by "Unable to open process"!
MySQL WILL NOT start without the configured ports free!
You need to uninstall/disable/reconfigure the blocking application
or reconfigure MySQL and the Control Panel to listen on a different port




<?php include 'footer.php'; ?>

<script type="text/javascript">

    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            'ajax' : '<?php echo base_url('sub_tests/load_datatable'); ?>',
            'order' : []
        });
    });

    

    var num_row = $('#num_row').val();
    var input_label_count = Number(num_row) + 1;


    $("#sub_test_input_table_add_new_row").on("click", function () 
    {   
        var newRow = $("<tr>");
        var cols = "";
        
        cols += '<td><input type="hidden"  id="for_new_row'+input_label_count+'" name="for_new_row[]" class="form-control" value="New"/><input type="text"  id="input_label_name'+input_label_count+'" name="input_label_name[]" class="form-control" placeholder="Please Enter here label Name"/></td>';

        cols += '<td><i class="fa fa-times-circle-o" onclick="delete_row(this,'+input_label_count+')"  style="color: red;font-size: 30px;cursor:pointer;" ></i></td>';
        newRow.append(cols);

  
        $("table.sub_test_input_table").append(newRow);
        input_label_count++;

    });

    function delete_row(obj,table_row_counter)
    {

        $(obj.parentElement.parentNode).remove(); 

        //console.log($(obj).attr('deleted_row_id'));
        // var deleted_av_emcure_id = $(obj).attr('deleted_row_id');

        // console.log(deleted_av_emcure_id);

        // if (deleted_av_emcure_id != undefined) 
        //  {
        //    deleted_arr.push(deleted_av_emcure_id);
        //  }

        // $("#deleted_av_emcure_id").val(deleted_arr);

    }





    const text = document.getElementsByClassName('text');
    $('.selectpicker').selectpicker();


    

    function reload_search_box() {
        for (var i = 0; i < text.length; i++) {
            if (text[i].innerText == "Select Test") 
            {   
                $('.filter-option').empty().append("Select Test");
                text[i].parentElement.parentNode.classList.add('selected');
            }else{
                text[i].parentElement.parentNode.classList.remove('selected');
            }
        }
    }

    function open_form() {
        reload_search_box();
       $('#form-model').modal('show');
    }

    $("#create_form").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url('sub_tests/create'); ?>",
            data: $("#create_form").serialize(),
            type: "post",
            async: false,
            dataType: 'json',
            success: function(response){
                $('#form-model').modal('hide');
                $('#create_form')[0].reset();
                $('#notification_alert_msg').empty().append("New Sub Test Added Successfully .. !!");
                $('#notification_alert').slideDown();
                $('#dataTables-example').DataTable().ajax.reload();
                reload_search_box();
            },
            error: function()
            {
                alert("error");
           }
        });
    });


    function edit_sub_test(sub_test_id) {
        //alert(sub_test_id);
       
        $.ajax({
            url: "<?php echo base_url('sub_tests/get_data_for_edit');?>",
            method: "post",
            data: {sub_test_id:sub_test_id},
            dataType: 'json',
            success: function(response){
                $('#sub_test_id').val(response.Id);
                $('#test_id').val(response.TestId);
                $('.filter-option').empty().append(response.TestName);

                for (var i = 0; i < text.length; i++) {
                    if (text[i].innerText == response.TestName.trim()) 
                    {
                        text[i].parentElement.parentNode.classList.add('selected');
                    }else{
                        text[i].parentElement.parentNode.classList.remove('selected');
                    }
                }

                $('#sub_test_name').val(response.SubTestName);
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
            url: "<?php echo base_url('sub_tests/update'); ?>",
            data: $("#update_form").serialize(),
            type: "post",
            async: false,
            dataType: 'json',
            success: function(response){
                $('#update-form-model').modal('hide');
                $('#update_form')[0].reset();
                $('#notification_alert_msg').empty().append("Sub Test Updated Successfully .. !!");
                $('#notification_alert').slideDown();
                $('#dataTables-example').DataTable().ajax.reload();
              },
           error: function()
           {
            alert("error");
           }
        });
    });



    function delete_sub_test(table,sub_test_id) {

    var table_name = table.getAttribute('alt');

        if (confirm('Are you sure you want to delete this?')) {
            $.ajax({
                url: "<?php echo base_url('sub_tests/delete_data');?>",
                method: "post",
                data: {sub_test_id:sub_test_id,table_name:table_name},
                dataType: 'json',
                success: function(response){
                    $('#notification_alert_msg').empty().append("Sub Test Deleted Successfully .. !!");
                    $('#notification_alert').slideDown();
                    $('#dataTables-example').DataTable().ajax.reload();
                },
                error: function()
                {
                    alert("error");
                }
            });
        }

    }


</script>
