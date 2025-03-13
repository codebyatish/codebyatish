<?php
session_start();
$HospitalId = $_SESSION['HospitalId'];
$UnitId = $_SESSION['UnitId'];

$login_specialisation_id = $_SESSION['login_specialisation_id'];
$login_doctor_id = $_SESSION['login_doctor_id'];
$redirect_to_sheet_page_name = $_REQUEST['inc'];

include('include/header.php')
?>
<div class="container">
  <div class="main-container">
    <!-- Page header start -->
    <div class="page-title">
      <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
          <h5 class="title" ><a onclick="close_phone_appointment_form()">Billing Summary Report</a> </h5>

              <button type="button" style="display: none;" id="btn_model_open_phone_appointment_registration" class="btn btn-primary btn-sm form-control" data-toggle="modal" data-target=".model_phone_appointment_registration">Phone Appointment Reg Model Open</button> 

                <button type="button" style="display: none;" id="btn_model_open_for_to_show_patinet_history" class="btn btn-primary btn-sm form-control" data-toggle="modal" data-target=".model_for_to_show_patinet_history">Phone Appointment Reg Model Open</button> 

        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

        </div>
      </div>
    </div>
    <!-- Page header end -->
    <!-- Content wrapper start -->
    <div class="content-wrapper">
   
      <!-- phone_appointment_form tab content   -->  
        <div id="phone_appointment_form" class="panel" style="background:white;">
        
           <div class="accordion toggle-icons" id="toggleIcons" style="margin-bottom: 15px;">
                <div class="accordion-container">
                  <div class="accordion-header" id="toggleIconsOne" style="background: #3871b736 !important;">
                    <a  href="#" class="" data-toggle="collapse" data-target="#toggleIconsCollapseOne" aria-expanded="true" aria-controls="toggleIconsCollapseOne">
                      <b>Generate Advance Report</b>
                    </a>
                  </div>
                   <div id="toggleIconsCollapseOne" class="collapse show" aria-labelledby="toggleIconsOne" data-parent="#toggleIcons">
                    <div class="accordion-body">
                      <b><span id="error_msg" style="color: red;padding-left: 5px;"> </span></b>
                      <div class="form-row" style="padding: 15px 25px 15px 25px;">     



                        <div class="col-md-2">
                            <li style="padding-bottom:5px;">Type </li> 
                            <select name="generate_by_bill_from_type" class="form-control"  id="generate_by_bill_from_type">
                              <option value="" >All</option>
                               <option value="OPD" >OPD</option>
                                <option value="IPD">IPD</option>
                            </select>
                        </div>


                      <!--   <div class="col-md-2">
                            <li style="padding-bottom:5px;">Users</li> 
                            <select name="generate_by_user" class="form-control"  id="generate_by_user">
                              <option value="" onchange="reset_filter();">All</option>
                              <?php
                                $srvrsp_query = "SELECT UserId,(case when (`UserAddedBy`.`DoctorId` != '') then concat('Doctor: ',`UserAddedBy`.`DoctorUserName`) else (case when (`UserAddedBy`.`EmployeeId` != '') then concat('Emp: ',`UserAddedBy`.`EmpUserName`) else `UserAddedBy`.`UserName` end) end) AS `AddedByUserName` FROM View_MST_User UserAddedBy";         
                                $srvrsp_query_dataset = mysqli_query($con,$srvrsp_query);
                                while($row=mysqli_fetch_array($srvrsp_query_dataset,MYSQLI_ASSOC)) 
                                {   
                                    if ($AddedBy == $row['UserId']) 
                                    {
                                      echo "<option value='".$row['UserId']."' selected>".$row['AddedByUserName']."</option>";
                                    }else
                                    {
                                      echo "<option value='".$row['UserId']."' >".$row['AddedByUserName']."</option>";
                                    }

                                }  ?>
                            </select>
                        </div> -->

                           <div class="col-md-2">
                            <li style="padding-bottom:5px;"> Doctor </li> 
                            <select name="generate_by_doctor" class="form-control"  id="generate_by_doctor">
                              <option value="" onchange="reset_filter();">All</option>
                              <?php
                                $srvrsp_query = "SELECT DISTINCT DoctorId,DoctorName FROM View_MST_DoctorDetails $user_login_condition_with_where  ORDER BY DoctorId";         
                                $srvrsp_query_dataset = mysqli_query($con,$srvrsp_query);
                                while($row=mysqli_fetch_array($srvrsp_query_dataset,MYSQLI_ASSOC)) 
                                {   
                                    if ($DoctorId == $row['DoctorId']) 
                                    {
                                      echo "<option value='".$row['DoctorId']."' selected>".$row['DoctorName']."</option>";
                                    }else
                                    {
                                      echo "<option value='".$row['DoctorId']."' >".$row['DoctorName']."</option>";
                                    }

                                }  ?>
                            </select>
                        </div>

                        <div class="col-md-2">
                          <li style="padding-bottom:5px;">  Date </li>  
                            <input type="text" class="form-control"  value="<?php echo date('d-m-Y'); ?>" id="generate_by_from_date" placeholder="Select From Date"> 
               
                        </div>
                        <div class="col-md-2">
                            <input type="text"  style="margin-top: 24px;"  class="form-control" name="to_date"  value="<?php echo date('d-m-Y'); ?>" id="generate_by_to_date" placeholder="Select To Date">  
                        </div>

                    </div>


                               <center>
                                    <div class="form-row" style="padding-top: 25px;">
                                      <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                          <a   class="btn btn-success btn-sm" style="color: white;width: 50%;" onclick="billing_summary_report()">Generate Report</a> 
                                        </div>
                                      <div class="col-md-4"></div>
                                    </div>
                                </center>

                    </div>
                  </div>
                </div>
              </div>   
              <br>
             <!--  <center> <b><span id="error_msg1" style="color: #fd7274;"> </span></center> </b> -->
              <hr>


                        <!--  Select Appointment Type-->
                        <div class="card" style="margin-bottom: 0 !important;">
                            <div class="card-body" style="border-left: 5px solid #1485c8;padding: 10px 10px 5px 10px !important" >
                              <h5  ><?php echo $_REQUEST['title']; ?> </h5>
                              <!--  <h5 style="float: right;margin-top: -20px;"><button style="background: #5f7082" 
                                type="button" class="btn btn-primary btn-sm" onclick="clear_filter()">Clear Filter</button></h5> -->
                          </div>
                        </div>


                          <div class="form-row" id="load_div_register_patient" style="padding-top: 30px;padding-left: 420px;" >

                       <i style="width: 2rem;height: 2rem;border-width: 1.2em;    margin-right: 10px;
    margin-top: -2px;
    color: #2b89ae;" id="img_load_search_register_patient" class=''></i>
                   </div>


                          <br>

                  <div class="form-row" style="padding-top: 20px;padding-left: 40px;">  
                      


                           <iframe id="show_billing_summary_report"  style="height: 1200px;  width: 100%; border: 1px;  overflow-y: overlay;   background: white;" src="rpt_bill_billing_summary_print.php"></iframe> 
                     
                       
                 </div>
                   <!-- Apoointment Datatable  -->
              
                                  <br>

                                  <center>
                                    <div class="form-row">
                                      <div class="col-md-3">
                                        
                                      </div>
                                        <div class="col-md-5">
                                        <!--   <a class="btn btn-danger" style="color: white;" onclick="close_phone_appointment_form()">Close</a> -->
                                        </div>
                                      <div class="col-md-4"></div>
                                    </div>
                                  </center>
                                  <!-- End of Submit And Cancel Buttons -->


          </div>


    </div>
  </div>
</div>

  
<!-- Javascript Code -->

<script type="text/javascript">

$(document).ready(function() 
{

  jQuery('#generate_by_from_date').datepicker(
  {
    constrainInput: true,
    autoSize: true,
    changeMonth: true,
    changeYear: true,
    dateFormat: 'dd-mm-yy'
  });

  jQuery('#generate_by_to_date').datepicker(
  {
      constrainInput: true,
      autoSize: true,
      changeMonth: true,
      changeYear: true,
      yearRange: "-100:+0",
      dateFormat: 'dd-mm-yy'
  });

  patient_phone_appointment_datatable();

});




/*function billing_summary_report()
{ 
    var generate_by_from_date =  $("#generate_by_from_date").val();
    var generate_by_to_date =  $("#generate_by_to_date").val();
    var generate_by_bill_from_type =  $("#generate_by_bill_from_type").val();
    var generate_by_unit =  $("#generate_by_unit").val();
    var generate_by_user =  $("#generate_by_user").val();



    window.open(
            'rpt_bill_billing_summary_print.php?generate_by_from_date='+generate_by_from_date+'&generate_by_to_date='+generate_by_to_date+'&generate_by_bill_from_type='+generate_by_bill_from_type+'&generate_by_user='+generate_by_user+'&generate_by_unit='+generate_by_unit,
            '_blank' 
          );


   //  window.location.href= iframe_url;
    
}
*/


billing_summary_report();
function billing_summary_report()
{ 
  //alert('f');
    var generate_by_from_date =  $("#generate_by_from_date").val();
    var generate_by_to_date =  $("#generate_by_to_date").val();
    var generate_by_bill_from_type =  $("#generate_by_bill_from_type").val();
    var generate_by_unit =  $("#generate_by_unit").val();
    var generate_by_user =  $("#generate_by_user").val();
var generate_by_doctor =  $("#generate_by_doctor").val();
 // $("#img_load_search_register_patient").attr("class","spinner-border spinner-border-sm");
    
    var iframe_url = 'rpt_bill_billing_summary_print.php?generate_by_from_date='+generate_by_from_date+'&generate_by_to_date='+generate_by_to_date+'&generate_by_bill_from_type='+generate_by_bill_from_type+'&generate_by_user='+generate_by_user+'&generate_by_doctor='+generate_by_doctor+'&generate_by_unit='+generate_by_unit;
    


     $("#show_billing_summary_report").attr("src",iframe_url);
     //$("#img_load_search_register_patient").attr("class","icon-done");
   //  window.location.href= iframe_url;
    
}




function continue_to_medical_record_details(AdmissionId) 
{
       var redirect_to_sheet_page_name = '<?php echo $redirect_to_sheet_page_name; ?>';

    window.location.href= redirect_to_sheet_page_name+".php?admission_id="+AdmissionId;
}


 onchange_of_department_select();



function onchange_of_department_select()
{
    var visiting_unit_id =  $("#visiting_unit_id").val();
    var visiting_department_id = $('#visiting_department_id').val();

    var login_doctor_id = $('#login_doctor_id').val();

    $.get("ipd_medical_records_db_operations.php?visiting_department_id="+visiting_department_id+"&task=get_doctor_details_using_department_id", function() {}).done(function(data) 
    {
     // alert(data);
        var data = data.trim();
        $('#visiting_doctor_id').empty().append("<option value=''> Select Doctor</option>");
        if (data) 
        {  
          var doctor_details_array= data.split('~');
          for (var i = 0; i < doctor_details_array.length; i++) 
          {
              var doctor_details_array_sub = doctor_details_array[i].split(';');
              var doctor_id = doctor_details_array_sub[0];
              var doctor_name = doctor_details_array_sub[1]+' '+doctor_details_array_sub[2];

              if (doctor_id == login_doctor_id) 
              { 
                 var sel_data = 'selected="selected"';
              }else
              {
                  var sel_data = '"';
              } 

              $('#visiting_doctor_id').append("<option "+sel_data+"  value='"+doctor_id+"'>"+doctor_name+"</option>");


              onchange_show_patient_details();
          }
        }
    }) 
}



function clear_filter()
{
   //$("#visiting_unit_id").val();
   $("#visiting_department_id").val('');
   $("#visiting_doctor_id").val('');
   $("#visit_details_from_date").val('');
    $("#visit_details_to_date").val('');

    onchange_show_patient_details()
}


function visit_details_todays_visit_onchange()
{ 
   if ($('#visit_details_todays_visit').prop("checked") == true)
    {
          var now = new Date();
          var visit_details_from_date_year = now.getFullYear();
          var visit_details_from_date_month = now.getMonth()+1;
          var visit_details_from_date_day = now.getDate();

          if(visit_details_from_date_day<10)
          {
              visit_details_from_date_day = '0'+visit_details_from_date_day
          } 

          if(visit_details_from_date_month < 10)
          {
              visit_details_from_date_month = '0'+visit_details_from_date_month
          } 

          $('#visit_details_from_date').val(visit_details_from_date_day+"/"+visit_details_from_date_month+"/"+visit_details_from_date_year);
          $("#visit_details_from_date").prop("disabled", true);

          $('#visit_details_to_date').val(visit_details_from_date_day+"/"+visit_details_from_date_month+"/"+visit_details_from_date_year);
          $("#visit_details_to_date").prop("disabled", true);

    }else
    {

          $("#visit_details_from_date").prop("disabled", false);
          $("#visit_details_to_date").prop("disabled", false);
           $("#visit_details_to_date").val('');
          $("#visit_details_from_date").val(date('dd-mm-yy'));
         

    }
}



function open_phone_appointment_form()
{
    $('#phone_appointment_form').show();
    $('#main_data').hide();
    $('#button_menu').hide();
    $('#selected_appointment_date').val('<?php echo date('d/m/Y'); ?>');
    $('#visiting_department_id').val('');
    $('#visiting_doctor_id').val('');

    $('#availabilty_field_name').text('Availabilty');


   // $('#appointement_slots_datatable_body_content').empty().append('<tr class="odd"><td valign="top" colspan="4" class="dataTables_empty"> Please Select Doctor </td></tr>');

}
  
function close_phone_appointment_form()
{
   $('#phone_appointment_form').hide();
   $('#main_data').show();
   $('#button_menu').show();
}
 


function open_model_for_to_show_appointment_details(appoint_id)
{
   // alert(appoint_id);
    $.get("ipd_medical_records_db_operations.php?appoint_id="+appoint_id+"&task=get_patient_appoitment_history_details", function() {}).done(function(data) 
    {
      // alert(data);
        var data = data.trim();
        var data_ar = data.split('~');
        
        $('#show_previous_appointment_case_paper_details').empty().append(data_ar[0]);
        $('#show_previous_appointment_prescription_details').empty().append(data_ar[1]);
        //  alert(data_ar[2]);
     //  alert(data_ar[4]);
         $("#appointment_id_frm_history").val(data_ar[2]);
          $("#print_lang_frm_history").val(data_ar[3]);

             $('#patient_appointment_history_details_show').empty().append(data_ar[5]);
        
        $('#previous_priscription_selected_drugs_list_details_datatable').DataTable();  
       
        $("#btn_model_open_for_to_show_patinet_history").click(); 
    })  
}
  


function onclick_to_print_prescription_frm_history()
{
    var appointment_id_frm_history =  $("#appointment_id_frm_history").val();
    var print_lang_frm_history =    $("#print_lang_frm_history").val();
        
    window.open
    (
        "ipd_medical_records_print_prescription.php?id="+appointment_id_frm_history+"&lan="+print_lang_frm_history,
            '_blank' 
      );
}

function onclick_to_print_case_paper_frm_history()
{ 
      var appointment_id_frm_history =  $("#appointment_id_frm_history").val();
      window.open
      (
            "ipd_medical_records_print_case_paper.php?appoint_id="+appointment_id_frm_history,
            '_blank' 
      );
}

</script>


<style type="text/css">
 .td_th_border
 {
    border: 0.5px solid lightgrey !important;

 }  
  
</style>