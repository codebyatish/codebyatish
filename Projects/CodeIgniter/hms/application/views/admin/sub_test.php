<?php include 'header.php'; 
    $uri_sub_test_id = $this->uri->segment('3');

    $sub_test_model = new Sub_test_model;
    $sub_test_edit_data = $sub_test_model->edit_data($uri_sub_test_id);

    $test_model = new Test_model;
    $test_data = $test_model->fetch_data('*','mst_tests',array(),"'LastUpdated Id'");

?>
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
                <h1 class="page-header"><?php echo (empty($uri_sub_test_id)) ? "ADD SUB TEST" : "EDIT SUB TEST"; ?></h1>
                <div class="alert alert-success alert-dismissible" id="notification_alert" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <span id="notification_alert_msg"></span>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                      <?php echo (empty($uri_sub_test_id)) ? "ADD SUB TEST" : "EDIT SUB TEST"; ?>
                    </div>
                    <div class="panel-body">
                        <form id="<?php echo (empty($uri_sub_test_id)) ? "create_form" : "update_form"; ?>">

                           <span><strong style="color: red;"  id="main_error_msg"></strong></span>

                            <br>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Select Test</label>
                                            <select class="form-control selectpicker" data-live-search="true" required="true" name="test_id">
                                                <option value="">Select Test</option>
                                                <?php 
                                                    
                                                    foreach ($test_data as $key => $value) { 

                                                    if (empty($uri_sub_test_id)) { ?>

                                                       <option value="<?php echo $value['Id'];?>"><?php echo $value['TestName']; ?></option>

                                                    <?php }else{ ?>

                                                        <option <?php echo ($sub_test_edit_data->TestId == $value['Id']) ? 'selected' : '';?> value="<?php echo $value['Id'];?>"><?php echo $value['TestName']; ?></option>
                                                    <?php }  } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="sub_test_name">Sub Test Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Sub Test Name" name="sub_test_name" id="sub_test_name" required="true" value="<?php echo (empty($sub_test_edit_data->SubTestName)) ? "" : $sub_test_edit_data->SubTestName; ?>">
                                            </div>
                                        </div>
                                    </div>


                                    <hr>


                                    <div class="row">
                                        <div class="col-lg-6"></div>
                                        <div class="col-lg-6">
                                            <div class="panel panel-info">
                                              <div class="panel-heading">Add Sub Test Input Fields</div>
                                                <div class="panel-body">
                                                    <div class="row" style="text-align: right;">
                                                        <div class="col-lg-12">
                                                            <input type="button" class="btn btn-primary" id="sub_test_input_table_add_new_row" value="Add New Field"/>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                             <span><strong style="color: red;"  id="error_msg"></strong></span>
                                                                <br>
                                                             <table style="margin-top: 8px;" id="sub_test_input_table" class="table table-striped table-bordered table-hover sub_test_input_table">
                                                                  <thead> 
                                                                    <tr>
                                                                      <th>Input Label Name</th>
                                                                      <th style="width: 22%;">Action</th>
                                                                    </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                    <?php 

                                                                        if ($uri_sub_test_id) { 

                                                                            $InputNames = explode(",", $sub_test_edit_data->InputLabels);

                                                                            for ($i=0; $i < count($InputNames); $i++) { 

                                                                               
                                                                                ?>
                                                                                
                                                                                <tr>
                                                                                    <input type="hidden" id="num_row" value="<?php echo count($InputNames); ?>" name="num_row[]" class="form-control" />
                                                                                    <td><input type="text" id="input_label_name"  name="input_label_name[]" class="form-control" placeholder="Please Enter here label Name" value="<?php echo $InputNames[$i]; ?>" /></td>
                                                                                    <td><span class="btn btn-md btn-danger" onclick="delete_row(this)">Delete Field</span></td>
                                                                                </tr>


                                                                            <?php } ?>

                                                                
                                                                       <?php }else{ ?>

                                                                            <tr>
                                                                                <input type="hidden" id="num_row" value="0" name="num_row[]" class="form-control" />
                                                                                <td><input type="text" id="input_label_name"  name="input_label_name[]" class="form-control" placeholder="Please Enter here label Name"/></td>
                                                                                <td></td>
                                                                            </tr>

                                                                      <?php } 

                                                                    ?>
                                                                   
                                                                </tbody>
                                                             </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div style="text-align: center;">
                                    <?php 

                                        if (empty($uri_sub_test_id)) { ?>

                                            <input type="submit" name="submit" class="btn btn-md btn-primary" value="Create Sub Test">

                                        <?php }else{ ?>
                                            <input type="hidden" name="sub_test_id" id="sub_test_id" value="<?php echo $sub_test_edit_data->Id ?>">
                                            <input type="submit" name="submit" class="btn btn-md btn-success" value="Update Sub Test">
                                    <?php } ?>
                                    
                                    <a href="<?php echo base_url("sub_tests/sub_test_index"); ?>" class="btn btn-danger" >Back</a>
                                </div>

                        </form>
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


    var num_row = $('#num_row').val();
    var input_label_count = Number(num_row) + 1;


    $("#sub_test_input_table_add_new_row").on("click", function () 
    {       
        if($('#input_label_name').val()== "") {

            $('#input_label_name').css("border-color", "red");
            $("#error_msg").empty().append("Please Enter Input Label Name.");
            setTimeout(function() {
                $("#input_label_name").removeAttr('style');
                $('#error_msg').empty();
            }, 3000);

        }else if($('#input_label_name'+Number(input_label_count - 1)).val() == "") {

            $('#input_label_name'+Number(input_label_count - 1)).css("border-color", "red");
            $("#error_msg").empty().append("Please Enter Input Label Name.");
            setTimeout(function() {
                $('#input_label_name'+Number(input_label_count - 1)).removeAttr('style');
                $('#error_msg').empty();
            }, 3000);

        }else{

            var newRow = $("<tr>");
            var cols = "";
            
            cols += '<td><input type="hidden"  id="num_row'+input_label_count+'" name="num_row[]" class="form-control" value="New"/><input type="text"  id="input_label_name'+input_label_count+'" name="input_label_name[]" class="form-control" placeholder="Please Enter here label Name"/></td>';

            cols += '<td><span class="btn btn-md btn-danger" onclick="delete_row(this,'+input_label_count+')">Delete Field</span></td>';
            newRow.append(cols);

        
            $("table.sub_test_input_table").append(newRow);

            input_label_count++;
        }

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

        var sub_test_name = $('#sub_test_name').val();

         $.ajax({
            url: "<?php echo base_url('sub_tests/check_subtest_name'); ?>",
            data: {sub_test_name:sub_test_name},
            type: "post",
            dataType: 'json',
            success: function(response){

                 $.ajax({
                        url: "<?php echo base_url('sub_tests/create'); ?>",
                        data: $("#create_form").serialize(),
                        type: "post",
                        async: false,
                        dataType: 'json',
                        success: function(response){
                            alert("Sub Test Created Successfully !!");
                            location.reload();
                        },
                        error: function()
                        {
                            alert("Table Name Already Exists or Syntax Error");
                       }
                    });
                
            },
            error: function()
            {   
                $('#sub_test_name').css("border-color", "red");
                $("#main_error_msg").empty().append("This Name already exists in database");
                setTimeout(function() {
                    $("#sub_test_name").removeAttr('style');
                    $('#main_error_msg').empty();
                }, 3000);

            }
        });





    });


    // function edit_sub_test(sub_test_id) {

    //     $.ajax({
    //         url: "<?php echo base_url('sub_tests/get_data_for_edit');?>",
    //         method: "post",
    //         data: {sub_test_id:sub_test_id},
    //         dataType: 'json',
    //         success: function(response){
    //             $('#sub_test_id').val(response.Id);
    //             $('#test_id').val(response.TestId);
    //             $('.filter-option').empty().append(response.TestName);

    //             for (var i = 0; i < text.length; i++) {
    //                 if (text[i].innerText == response.TestName.trim()) 
    //                 {
    //                     text[i].parentElement.parentNode.classList.add('selected');
    //                 }else{
    //                     text[i].parentElement.parentNode.classList.remove('selected');
    //                 }
    //             }

    //             $('#sub_test_name').val(response.SubTestName);
    //             $('#update-form-model').modal('show');
    //         },
    //         error: function()
    //         {
    //             alert("error");
    //         }
    //     });

    // }


    $("#update_form").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url('sub_tests/update'); ?>",
            data: $("#update_form").serialize(),
            type: "post",
            async: false,
            dataType: 'json',
            success: function(response){
                alert("OK");
                // $('#update-form-model').modal('hide');
                // $('#update_form')[0].reset();
                // $('#notification_alert_msg').empty().append("Sub Test Updated Successfully .. !!");
                // $('#notification_alert').slideDown();
                // $('#dataTables-example').DataTable().ajax.reload();
              },
           error: function()
           {
            alert("error");
           }
        });
    });





    function delete_test(sub_test_id) {
         $.ajax({
            url: "<?php echo base_url('tests/delete_data');?>",
            method: "post",
            data: {sub_test_id:sub_test_id},
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

</script>
