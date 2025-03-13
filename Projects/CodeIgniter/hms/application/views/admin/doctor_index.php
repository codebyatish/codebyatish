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
                <h1 class="page-header">Referral Doctors</h1>
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
                            <h4 class="modal-title" id="myModalLabel">ADD DOCTOR INFORMATION</h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-check-input" type="radio" name="doctor_category" value="Doctor Entry">
                                            <label for="inlineRadio1" style="font-size: 24px;"> Doctor Entry</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-check-input" type="radio" name="doctor_category" value="Hospital Entry">
                                            <label for="inlineRadio2" style="font-size: 24px;"> Hospital Entry</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="doctor_code">Code</label>
                                            <input type="number" class="form-control" placeholder="Enter Code" name="doctor_code">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="doctor_name">Doctor Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Doctor Name" name="doctor_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="doctor_phone_number">Phone Number</label>
                                            <input type="number" class="form-control" placeholder="Enter Doctor Phone Nummber" name="doctor_phone_number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="doctor_email">Email Id</label>
                                            <input type="email" class="form-control" placeholder="Enter Doctor Email Id" name="doctor_email" required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="compliment">Compliment</label>
                                            <input type="text" class="form-control" placeholder="Enter Compliment" name="compliment">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="doctor_qualification">Qualification</label>
                                            <select class="form-control" name="doctor_qualification" required="true">
                                                <option value="">Select Doctor Qualification</option>
                                                <option value="MD">MD</option>
                                                <option value="BHMS">BHMS</option>
                                                <option value="BAMS">BAMS</option>
                                                <option value="MBBS">MBBS</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="doctor_address">Address</label>
                                            <textarea class="form-control" name="doctor_address" placeholder="Enter Address" style="resize: vertical;"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="text-align: center;">
                            <input type="submit" name="submit" class="btn btn-md btn-success" value="Save">
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
                            <h4 class="modal-title" id="myModalLabel">UPDATE DOCTOR INFORMATION</h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-check-input" type="radio" name="doctor_category" id="doctor_entry_category" value="Doctor Entry">
                                            <label for="inlineRadio1" style="font-size: 24px;"> Doctor Entry</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-check-input" type="radio" name="doctor_category" id="hospital_entry_category" value="Hospital Entry">
                                            <label for="inlineRadio2" style="font-size: 24px;"> Hospital Entry</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="doctor_code">Code</label>
                                            <input type="number" class="form-control" placeholder="Enter Code" name="doctor_code" id="doctor_code">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="doctor_name">Doctor Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Doctor Name" name="doctor_name" id="doctor_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="doctor_phone_number">Phone Number</label>
                                            <input type="number" class="form-control" placeholder="Enter Doctor Phone Nummber" name="doctor_phone_number" id="doctor_phone_number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="doctor_email">Email Id</label>
                                            <input type="email" class="form-control" placeholder="Enter Doctor Email Id" name="doctor_email" required="true" id="doctor_email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="compliment">Compliment</label>
                                            <input type="text" class="form-control" placeholder="Enter Compliment" name="compliment" id="compliment">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="doctor_qualification">Qualification</label>
                                            <select class="form-control" name="doctor_qualification" required="true" id="doctor_qualification">
                                                <option value="">Select Doctor Qualification</option>
                                                <option value="MD">MD</option>
                                                <option value="BHMS">BHMS</option>
                                                <option value="BAMS">BAMS</option>
                                                <option value="MBBS">MBBS</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="doctor_address">Address</label>
                                            <textarea class="form-control" name="doctor_address" id="doctor_address" placeholder="Enter Address" style="resize: vertical;"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="text-align: center;">
                            <input type="hidden" name="doctor_id" id="doctor_id">
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
                                <label for="select_doctor_category">Single Search Select</label>
                                <select class="form-control selectpicker" id="select-country" data-live-search="true">
                                    <option value="">Select Option</option>
                                    <option value="china">China</option>
                                    <option value="malayasia">Malayasia</option>
                                    <option value="singapore">Singapore</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="select_doctor_category">Multi-Search Select</label>
                                <select class="form-control selectpicker" multiple data-live-search="true">
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
                        <button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target=".bd-example-modal-md-create">Add Doctor</button>
                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-danger">Delete User</a> -->
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Code</th>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Qualification</th>
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

   // $('.selectpicker').selectpicker();

    $(document).ready(function(){

       var datatable = $('#dataTables-example').DataTable({
         'processing': true,
         'serverSide': true,
         'serverMethod': 'post',
         //'searching': false, // Remove default Search Control
         'ajax': {
            'url':'<?php echo base_url('doctors/load_datatable'); ?>',
            'data': function(data){
               data.select_doctor_category = $('#select_doctor_category').val();
            }
         },
         'columns': [
            { data: 'Id' },
            { data: 'DoctorCode' },
            { data: 'DoctorCategory' },
            { data: 'DoctorName' },
            { data: 'DoctorEmail' },
            { data: 'DoctorPhoneNumber' },
            { data: 'DoctorQualification' },
            { data: 'LastUpdated' }
         ]
       });

       $('#select_doctor_category').change(function(){
          datatable.draw();
       });

    });



    $("#create_form").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url('doctors/create'); ?>",
            data: $("#create_form").serialize(),
            type: "post",
            async: false,
            dataType: 'json',
            success: function(response){
                $('#form-model').modal('hide');
                $('#create_form')[0].reset();
                $('#notification_alert_msg').empty().append("Doctor Information Added Successfully .. !!");
                $('#notification_alert').slideDown();
                $('#dataTables-example').DataTable().ajax.reload();
              },
           error: function()
           {
            alert("error");
           }
        });
    });


     function edit_doctor(doctor_id) {
        var doctor_entry_category = document.getElementById("doctor_entry_category");
        var hospital_entry_category = document.getElementById("hospital_entry_category");
        $.ajax({
            url: "<?php echo base_url('doctors/get_data_for_edit');?>",
            method: "post",
            data: {doctor_id:doctor_id},
            dataType: 'json',
            success: function(response){
                $('#doctor_id').val(response.Id);
                var DocCat = response.DoctorCategory;
                (DocCat == "Doctor Entry") ? doctor_entry_category.checked = true : hospital_entry_category.checked = true;
                $('#doctor_code').val(response.DoctorCode);
                var doc_name = response.DoctorName;
                var doc_arr = doc_name.split(".");
                $('#doctor_name').val(doc_arr[1].trim());
                $('#doctor_phone_number').val(response.DoctorPhoneNumber);
                $('#doctor_email').val(response.DoctorEmail);
                $('#compliment').val(response.Compliment);
                $('#doctor_qualification').val(response.DoctorQualification);
                $('#doctor_address').val(response.DoctorAddress);
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
            url: "<?php echo base_url('doctors/update'); ?>",
            data: $("#update_form").serialize(),
            type: "post",
            async: false,
            dataType: 'json',
            success: function(response){
                $('#update-form-model').modal('hide');
                $('#notification_alert_msg').empty().append("Doctor Information Updated Successfully .. !!");
                $('#notification_alert').slideDown();
                $('#update_form')[0].reset();
                $('#dataTables-example').DataTable().ajax.reload();
              },
           error: function()
           {
            alert("error");
           }
        });
    });



    function delete_doctor(doctor_id) {
         $.ajax({
            url: "<?php echo base_url('doctors/delete_data');?>",
            method: "post",
            data: {doctor_id:doctor_id},
            dataType: 'json',
            success: function(response){
                $('#notification_alert_msg').empty().append("Doctor Information Deleted Successfully .. !!");
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
