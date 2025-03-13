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

    input[type=radio] {
        width: 18px;
        height: 18px;
    }

</style>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Patients (Tests)</h1>
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

        <!-- Create Patient Test Modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="form-model">
            <div class="modal-dialog modal-lg" style="width: 1140px;">
                <form id="create_form">
                    <div class="modal-content">
                        <div class="model-primary modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">PATIENT CONTACT INFORMATION</h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="form-group">
                                            <label for="mobile_number">Patient Mobile Number</label>
                                            <input type="number" class="form-control" placeholder="Enter Patient Mobile Number" name="mobile_number"  required>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="registration_code">Regitration Code</label>
                                            <select class="form-control" name="registration_code" required="true">
                                                <option value="">Select Regitration Code</option>
                                                <option value="OPD">OPD</option>
                                                <option value="IPD">IPD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lab_id_no">Lab. ID No.</label>
                                            <input type="number" class="form-control" placeholder="Enter Lab ID No" name="lab_id_no">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="date">Date</label>
                                            <input type="date" class="form-control" placeholder="Select Date" name="date" value="<?php  echo date("d/mY"); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="name" class="form-control" placeholder="Enter First Name" name="first_name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select class="form-control" name="gender" required="true">
                                                <option value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="date_of_birth">Date of Birth</label>
                                            <input type="date" class="form-control" placeholder="Select Date of Birth" name="date_of_birth" id="date_of_birth" onchange="CalculateAge('Add','age')">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="age">Age</label>
                                            <input type="text" class="form-control" placeholder="Your Calculated Age" name="age" id="age" style="background: #ccc;">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="reference_doctor">Reference Doctor</label>
                                        <select class="form-control selectpicker" name="reference_doctor" data-live-search="true" >
                                                <option value="">Select Reference Doctor</option>
                                                <?php 

                                                    foreach ($doctor_data as $key => $value) { ?>

                                                        <option value="<?php echo $value['Id'];?>"><?php echo $value['DoctorName'];?></option>

                                                <?php  } ?>
                                        </select>
                                    </div>
                                </div>

                                <hr>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="test_id">Select Heading (Main Test)</label>
                                            <select class="form-control selectpicker" id="test_id" name="test_id" data-live-search="true" onchange="onchangeSubtest('Add','sub_test_sel')">
                                                <option value="">Select Test</option>
                                                <?php 

                                                    foreach ($test_data as $key => $value) { ?>

                                                        <option id="<?php echo $value['Id'];?>" value="<?php echo $value['Id'];?>"><?php echo $value['TestName'];?></option>

                                                <?php  } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" id="sub_test_sel">
                                            <label for="sub_test_id">Select Sub-Test</label>
                                                <select class="form-control selectpicker" multiple data-live-search="true" data-actions-box="true" name="sub_test_id[]" id="sub_test_id">
                                                    <?php 

                                                        foreach ($subtest_data as $key => $value) { ?>

                                                            <option value="<?php echo $value['Id'];?>"><?php echo $value['SubTestName'];?></option>

                                                    <?php  } ?>
                                                </select>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="text-align: center;">
                            <input type="submit" name="submit" class="btn btn-md btn-primary" value="Save">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Update Patient Test Modal -->
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="update-form-model">
            <div class="modal-dialog modal-lg" style="width: 1140px;">
                <form id="update_form">
                    <div class="modal-content">
                        <div class="model-primary modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">UPDATE PATIENT CONTACT INFORMATION</h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="form-group">
                                            <label for="mobile_number">Patient Mobile Number</label>
                                            <input type="number" class="form-control" placeholder="Enter Patient Mobile Number" name="mobile_number" id="mobile_number" required>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="registration_code">Regitration Code</label>
                                            <select class="form-control" id="registration_code" name="registration_code" required="true">
                                                <option value="">Select Regitration Code</option>
                                                <option value="OPD">OPD</option>
                                                <option value="IPD">IPD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lab_id_no">Lab. ID No.</label>
                                            <input type="number" class="form-control" placeholder="Enter Lab ID No" name="lab_id_no" id="lab_id_no">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="date">Date</label>
                                            <input type="date" class="form-control" placeholder="Select Date" name="date" value="<?php  echo date("d/mY"); ?>" id="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="name" class="form-control" placeholder="Enter First Name" name="first_name" id="first_name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name" id="last_name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select class="form-control" name="gender" required="true" id="gender">
                                                <option value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="date_of_birth">Date of Birth</label>
                                            <input type="date" class="form-control" placeholder="Select Date of Birth" name="date_of_birth" id="update_date_of_birth" onchange="CalculateAge('Update','update_age')">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="age">Age</label>
                                            <input type="text" class="form-control" placeholder="Your Calculated Age" name="age" id="update_age" style="background: #ccc;" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="reference_doctor">Reference Doctor</label>
                                        <select class="form-control selectpicker" id="reference_doctor" name="reference_doctor" data-live-search="true" >
                                                <option value="">Select Reference Doctor</option>
                                                <?php 

                                                    foreach ($doctor_data as $key => $value) { ?>

                                                        <option value="<?php echo $value['Id'];?>"><?php echo $value['DoctorName'];?></option>

                                                <?php  } ?>
                                        </select>
                                    </div>
                                </div>

                                <hr>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="update_test_id">Select Heading (Main Test)</label>
                                            <select class="form-control selectpicker" id="update_test_id" name="test_id" data-live-search="true" onchange="onchangeSubtest('Update','update_sub_test_sel')">
                                                <option value="">Select Test</option>
                                                <?php 

                                                    foreach ($test_data as $key => $value) { ?>

                                                        <option id="<?php echo $value['Id'];?>" value="<?php echo $value['Id'];?>"><?php echo $value['TestName'];?></option>

                                                <?php  } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" id="update_sub_test_sel">
                                            <label for="update_sub_test_id">Select Sub-Test</label>
                                                <select class="form-control selectpicker" multiple data-live-search="true" data-actions-box="true" name="sub_test_id[]" id="update_sub_test_id">
                                                    <?php 

                                                        foreach ($subtest_data as $key => $value) { ?>

                                                            <option value="<?php echo $value['Id'];?>"><?php echo $value['SubTestName'];?></option>

                                                    <?php  } ?>
                                                </select>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="text-align: center;">
                            <input type="hidden" name="patient_test_id" id="patient_test_id">
                            <input type="submit" name="submit" class="btn btn-md btn-success" value="Update">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h4>Filters</h4></div>
                    <div class="panel-body">
                        <div class="filter_row row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="select_doctor_category">Doctor Category</label>
                                    <select class="form-control" name="select_doctor_category" id="select_doctor_category">
                                        <option value="">Select Doctor Category</option>
                                        <option value="Doctor Entry">Doctor Entry</option>
                                        <option value="Hospital Entry">Hospital Entry</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="select_ountry">Single Search Select</label>
                                <select class="form-control selectpicker" id="select_ountry" data-live-search="true">
                                    <option value="">Select Option</option>
                                    <option value="china">China</option>
                                    <option value="malayasia">Malayasia</option>
                                    <option value="singapore">Singapore</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="mul_sel">Multi-Search Select</label>
                                <select class="form-control selectpicker" id="mul_sel" multiple data-live-search="true">
                                    <option value="Mustard">Mustard</option>
                                    <option value="Ketchup">Ketchup</option>
                                    <option value="Relish">Relish</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading"> 
                        <button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Test</button>
                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-danger">Delete User</a> -->
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">

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
        DataTableReload();
    });


    function DataTableReload() {
        $.ajax({
            url: "<?php echo base_url('patients/load_datatable'); ?>",
            type: "post",
            dataType: 'html',
            success: function(response){
               //console.log(response);
               
               $('.table-responsive').empty().append(response);
               $('#dataTables-example').DataTable();
            },
            error: function()
            {
                alert("error");
            }
        });
    }

function CalculateAge(status,append_id)
{  
    var DateofBirth;
    if (status == 'Add') 
    {
       DateofBirth = $('#date_of_birth').val();
        
    }else{

       DateofBirth = $('#update_date_of_birth').val();
    }


    var split_dbo = DateofBirth.split("-");   

    var senddate = new Date().getMonth()+"/"+new Date().getDate()+"/"+new Date().getFullYear(); 
    //var x = birthdate.split("/");    
    var y = senddate.split("/");
    var bdays = split_dbo[2];
    var bmonths = split_dbo[1];
    var byear = split_dbo[0];
    //alert(bdays);
    var sdays = y[1];
    var smonths = y[0];
    var syear = y[2];
    //alert(sdays);

    if(sdays < bdays)
    {
        sdays = parseInt(sdays) + 30;
        smonths = parseInt(smonths) - 1;
        //alert(sdays);
        var fdays = sdays - bdays;
        //alert(fdays);
    }
    else{
        var fdays = sdays - bdays;
    }

    if(smonths < bmonths)
    {
        smonths = parseInt(smonths) + 12;
        syear = syear - 1;
        var fmonths = smonths - bmonths;
    }
    else
    {
        var fmonths = smonths - bmonths;
    }
    var fyear = syear - byear;

//alert(fyear+' Year\'s '+fmonths+' months '+fdays+' days');

    $('#'+append_id+'').empty().val(fyear+' Years');
    
}


    
    function onchangeSubtest(status,append_id,test_id="",sub_test_id="") {
        //alert(append_id)

        var dynamic_updator_sel;
        if (status == 'Add') 
        {
            test_id = $('#test_id').val();
            dynamic_updator_sel = 'sub_test_id';
            
        }else{

            test_id = $('#update_test_id').val();
            dynamic_updator_sel = 'update_sub_test_id';
        }
        
        $.ajax({
            url: "<?php echo base_url('sub_tests/get_sub_test'); ?>",
            data: {test_id:test_id,status:status,sub_test_id:sub_test_id},
            type: "post",
            dataType: 'html',
            success: function(response){
                // console.log('#'+append_id+''+'-----'+'#'+dynamic_updator_sel+'');
               //console.log(response);
                $('#'+append_id+'').empty().append(response);
                $('#'+dynamic_updator_sel+'').selectpicker();  

              },
           error: function()
           {
            alert("error");
           }
        });

    }


    $("#create_form").submit(function(event) {
        event.preventDefault();

        $.ajax({
            url: "<?php echo base_url('patients/create'); ?>",
            data: $("#create_form").serialize(),
            type: "post",
            async: false,
            dataType: 'json',
            success: function(response){
                $('#form-model').modal('hide');
                $('#create_form')[0].reset();
                $('#notification_alert').slideDown();
                $('#notification_alert_msg').empty().append("Patient Test Information Added Successfully .. !!");
                DataTableReload();
              },
           error: function()
           {
            alert("error");
           }
        });
    });


    function firstletterToUppercase(string) {
        const firstletterToUppercase = string.charAt(0).toUpperCase() + string.slice(1).toLowerCase();
        return firstletterToUppercase;
    }


     function edit_test(patient_test_id) {

        //alert(patient_test_id);

        $.ajax({
            url: "<?php echo base_url('patients/get_data_for_edit');?>",
            method: "post",
            data: {patient_test_id:patient_test_id},
            dataType: 'json',
            success: function(response){
                
                $('#update-form-model').modal('show');
                $('#patient_test_id').val(response.Id);
                $('#update_test_id').selectpicker('val', response.TestId);
                
                onchangeSubtest('Update','update_sub_test_sel',response.TestId,response.SubTestId);

                // var sub_tests_split = response.SubTestId.split(',');
                // var sub_tests_value_array = [];
                // for (var i = 0; i < sub_tests_split.length; i++) {
                //     sub_tests_value_array.push(Number(sub_tests_split[i]));
                //     $('#update_sub_test_id').selectpicker('val', sub_tests_value_array);
                // }
                // $('#update_sub_test_id').selectpicker();

                $('#mobile_number').val(response.MobileNumber);
                $('#registration_code').val(response.RegitrationCode);
                $('#reference_doctor').selectpicker('val', response.ReferenceDoctor);
                $('#registration_code').val(response.RegitrationCode);
                $('#first_name').val(firstletterToUppercase(response.FirstName));
                $('#last_name').val(firstletterToUppercase(response.LastName));
                $('#gender').val(response.Gender);
                $('#date').val(response.Date);
                $('#update_date_of_birth').val(response.DateOfBirth);
                $('#update_age').val(response.Age);
                $('#lab_id_no').val(response.LabIDNo);
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
            url: "<?php echo base_url('patients/update'); ?>",
            data: $("#update_form").serialize(),
            type: "post",
            async: false,
            dataType: 'json',
            success: function(response){
                $('#update-form-model').modal('hide');
                $('#notification_alert_msg').empty().append("Patient Test Information Updated Successfully .. !!");
                $('#notification_alert').slideDown();
                $('#update_form')[0].reset();
                DataTableReload();
              },
           error: function()
           {
            alert("error");
           }
        });
    });



    function delete_test(patient_test_id) {
         //alert(patient_test_id);
         $.ajax({
            url: "<?php echo base_url('patients/delete_data');?>",
            method: "post",
            data: {patient_test_id:patient_test_id},
            dataType: 'json',
            success: function(response){
                $('#notification_alert_msg').empty().append("Patient Test Information Deleted Successfully .. !!");
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
