<?php

	include("include/header.php");

?>		


<style type="text/css">


.table>caption+thead>tr:first-child>td, .table>caption+thead>tr:first-child>th, .table>colgroup+thead>tr:first-child>td, .table>colgroup+thead>tr:first-child>th, .table>thead:first-child>tr:first-child>td, .table>thead:first-child>tr:first-child>th {
    border-top: 0;
}
table.dataTable thead>tr>th.sorting_asc, table.dataTable thead>tr>th.sorting_desc, table.dataTable thead>tr>th.sorting, table.dataTable thead>tr>td.sorting_asc, table.dataTable thead>tr>td.sorting_desc, table.dataTable thead>tr>td.sorting {
    padding-right: 30px;
}
table.table-bordered.dataTable th, table.table-bordered.dataTable td {
    border-left-width: 0;
}
table.dataTable thead .sorting, table.dataTable thead .sorting_asc, table.dataTable thead .sorting_desc, table.dataTable thead .sorting_asc_disabled, table.dataTable thead .sorting_desc_disabled {
    cursor: pointer;
    position: relative;
}
table.dataTable.nowrap th, table.dataTable.nowrap td {
    white-space: nowrap;
}

.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border: 1px solid #ddd;
}


</style>




<link rel="stylesheet" type="text/css" href="include/datatable/jquery.dataTables.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> 
<link rel="stylesheet" type="text/css" href="include/datatable/demo_table_jui.css" />




			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Blank Page</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Blank Page</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
        					<div style="margin-top: 10px;" id="deduction_datatable" class="table-responsive" ></div>

						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->


        <script src="include/js/jquery-3.2.1.min.js"></script>


        <script src="include/js/popper.min.js"></script>
        <script src="include/js/bootstrap.min.js"></script>


        <script src="include/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <script  src="include/js/script.js"></script>



	<script type="text/javascript" src="include/datatable/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" language="javascript" src="include/datatable/jquery.datatables.js"></script>







    </body>

    <script type="text/javascript">
	$(document).ready(function() {
			   deduction_datatable();
			    //$('#example').DataTable();
	} );









function deduction_datatable()
{ 
  
    $('#deduction_datatable').empty().html( '<table  id="main_datatable" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%" ></table>' );
    $('#main_datatable').dataTable(
    {       
           // "iDisplayLength":10,
         //"bJQueryUI": true,

            "sAjaxSource": "cases_server_processing.php",  
            "aaSorting": [],

            "aoColumns": 
            [


            { 

                    "sTitle": "<span class='icon-delete' style='margin-left: -10px;' title='delete'></span><span class='custom-checkbox' style='padding-left: 27px;'><input type='checkbox' class='custom-control-input' onclick='select_all(this)' id='delete_selected_record_checkbox'><label class='custom-control-label' for='delete_selected_record_checkbox'></label></span><i class='icon-edit' title='View Appointment Details' style='padding-left:20px;'></i>","sClass": "center", "sWidth": "10%","bSortable":false,"fnRender": function(obj) 
                    { 
     
                        delete_selected_id_array=[];
                        AppointId= obj.aData[ obj.iDataColumn ];
                        idl= obj.aData[obj.iDataColumn];   


                                if(delete_selected_id_array.indexOf(idl) != '-1')
                                {
                                 return   "<td><span class='custom-checkbox' style='padding-left: 33px;'><input type='checkbox' class='sel_log custom-control-input'onclick='select_record_for_delete(this)' id='"+idl+"' value='"+idl+"' ><label class='custom-control-label' for='"+AppointId+"'></label><a title='View Appointment Details' href='opd_view_appointment_details.php?appoint_id="+AppointId+"' width='16'height='16'class='icon-visibility'style='cursor:pointer;margin-left: 20px;margin-bottom: 5px;color:blue;'></a></td>";
                                }
                                else{
                                  return  "<td><span class='custom-checkbox' style='padding-left: 33px;'><input type='checkbox' class='sel_log custom-control-input'onclick='select_record_for_delete(this)' id='"+idl+"' value='"+idl+"' ><label class='custom-control-label' for='"+AppointId+"'></label><a title='View Appointment Details' href='opd_view_appointment_details.php?appoint_id="+AppointId+"' width='16'height='16'class='icon-visibility'style='cursor:pointer;margin-left: 20px;margin-bottom: 5px;color:blue;'></a></td>";
                                    } 
 
                       

                  }       
              },



              { 
                "sTitle": "ID", "bVisible":false, "sClass": "left"
              },

              { 
                "sTitle": "Case Number", "bVisible":true, "sClass": "left"
              },

          
              { 
                "sTitle": "Case Issue Date","sClass": "left", "bSortable":true,"bVisible":true, "bSearchable": true
              },


              { 
                "sTitle": "Case Entry By","sClass": "left", "bSortable":true,"bVisible":true, "bSearchable": true
              },



              { "sTitle": "Last updated","sClass": "left", "bSortable":true,"bVisible":true, "bSearchable": true

              }
              
             

            ]
       });
}






  function select_all(obj11)
  {
      if($(obj11).is(':checked'))
      {


      	 $('.sel_log').each(function(){
      	 	console.log(this);
      	 });
/*          $('.sel_log').each(function(){
            this.checked = true;
            delete_selected_id_array.push($(this).attr('id'));
            $(this).parents('tr').addClass('del');
            $(this).parents('tr').css('background-color','silver');
             document.getElementById("delete_button").disabled = false;
          });*/



      }else
      {
          $('.sel_log').each(function(){
            this.checked = false;
            delete_selected_id_array=[];
            $(this).parents('tr').removeClass('del');
         //   $(this).parents('tr').addClass('biege');
             $(this).parents('tr').removeAttr('style');
             document.getElementById("delete_button").disabled = true;
          });
      }
  } 






  function select_record_for_delete(obj45)
  {

      if($(obj45).is(':checked'))
      {
          var ind =  delete_selected_id_array.indexOf($(obj45).attr('id'));
          if(ind == -1) {
             delete_selected_id_array.push(($(obj45).attr('id')));

          }
          $(obj45).parents('tr').css('background-color','silver');
          $(obj45).parents('tr').removeClass();
          $(obj45).parents('tr').addClass('del');

          document.getElementById("delete_button").disabled = false;
      }
      else
      {
          for(var i = delete_selected_id_array.length - 1; i >= 0; i--) 
          {
              if(delete_selected_id_array[i] === $(obj45).attr('id')) 
              {
                 delete_selected_id_array.splice(i, 1); 
              }
          }
        
          $(obj45).parents('tr').removeAttr('style');
          $(obj45).parents('tr').removeClass('del');
          $(obj45).parents('tr').addClass('biege');

          if(delete_selected_id_array.length == 0)
          {
              document.getElementById("delete_button").disabled = true;
          }
      }
  }






 function update_details(id){
   
  
   $('#billing_form').show();
      $('#main_data').hide();
      $('#button_menu').hide();
        
          var jqxhrn = $.get("ipd_billing_db_operations.php?BillId="+id+"&task=get_details_for_update", function() {}).done(function(data) {
                       var data = data.trim();
        if(data != "")
        {
             var result = data.split('~');
  
        $('#task').val("update");
        service_selected_records_for_bill_main_array=[];
              $('#BillId').val(result[0].trim());
        BillId=result[0].trim();
              $('#billing_info_patient_source').val(result[1].trim()); 
              $('#billing_info_patient_category').val(result[2].trim());
              $('#billing_info_tarrif').val(result[3].trim());
              $('#billing_info_unit').val(result[4].trim());
              $('#patient_info_mr_no').val(result[5].trim());
        patient_mr_no= result[5].trim();
        
              $('#billing_info_camp_name').val(result[6].trim());
              $('#billing_info_company_name').val(result[7].trim());
              $('#bill_details_bill_no').val(result[8].trim());
        $('#bill_details_receipt_no').val(result[9].trim());
        
        $('#billing_info_doctor_name').val(result[10].trim());
        $('#billing_info_refer_entity').val(result[11].trim());
        $('#billing_info_reference_doctor_name').val(result[12].trim());      
        $('#payment_details_total_amount').val(result[13].trim());
        $('#payment_details_patient').val(result[13].trim());
        
        $('#payment_details_payable_amount').val(result[14].trim());
        $('#payment_details_paid_by_patient').val(result[15].trim());
        $('#payment_balance_amount').val(result[16].trim());
        $('#payment_details_remarks').val(result[17].trim());       
        $('#payment_details_discount_amount').val(result[18].trim());         
        
        $('#payment_details_authorised_by').val(result[19].trim());
        $('#payment_mode').val(result[20].trim());
        $('#payment_details_percentage').val(result[21].trim());
      
      cnt=0; 
      var jqxhrn = $.get("ipd_billing_db_operations.php?BillId="+BillId+"&count="+cnt+"&task=get_bill_service_details", function() {})   .done(function(data) 
         { 
              //alert(data);
          var data = data.trim();
          if(data != "")
          {
            var data_arr= data.split('~');
            // alert(cf_array.length);
              $('#charges_services_table_content').empty().append(data_arr[0]);
        
              Total=0;
              Total_service=0;
              previous=cnt;
              cnt=data_arr[1];
              //alert("cnt=="+cnt);
              for(var i=0;i<cnt;i++){
                Rate=parseInt($('#Rate_'+i+'').val());
                amount=parseInt($('#Amount_'+i+'').val());
                
                service_id=$('#service_id_'+i+'').val();
                service_selected_records_for_bill_main_array.push(service_id);
                //service_selected_records_for_bill_main_array.push(service_id);
                Total=Total+amount;
              }
              $('#bill_service_ids').val(service_selected_records_for_bill_main_array);
    
          }
         })
      get_mr_no();
        }
           }) 
 }  
   

   
    </script>

</html>