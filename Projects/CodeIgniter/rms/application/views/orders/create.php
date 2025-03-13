
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Orders</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Orders</li>
    </ol>
  </section>
  
  
<style>

.select2-container .select2-selection--single {
	height:34px;
}</style>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <div id="messages"></div>

        <?php if($this->session->flashdata('success')): ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php elseif($this->session->flashdata('error')): ?>
          <div class="alert alert-error alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?>


        <div class="box">
          <div class="box-header" style="padding:3px">
		  
			<div class="col-md-4 col-xs-12 pull pull-right" style="text-align:right">
			
                  <label for="gross_amount" class="control-label">Date: <?php echo date('Y-m-d') ?></label>
				  <label for="gross_amount" class="control-label">Time: <?php echo date('h:i a') ?></label>
            
                </div>
          </div>
          <!-- /.box-header -->
          <form role="form"  id="forms" action="<?php base_url('orders/create') ?>" method="post" class="form-horizontal">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                  <div class="row">
                      <div class="col-md-3">
                        <label for="customer_name">Customer Name</label>
                        <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter Name">
                      </div>
                      <div class="col-md-3">
                        <label for="customer_mobile_number">Mobile Number</label>
                        <input type="number" class="form-control" id="customer_mobile_number" name="customer_mobile_number" placeholder="Enter Mobile Number">
                      </div>
                      <div class="col-md-3">
                        <label for="customer_email">Email</label>
                        <input type="email" class="form-control" id="customer_email" name="customer_email" placeholder="Enter Email">
                      </div>
                      <div class="col-md-3">
                        <label for="customer_date_of_birth">Date of Birth</label>
                        <input type="date" class="form-control" id="customer_date_of_birth" name="customer_date_of_birth">
                      </div>
                  </div>
                  <br>
                  <hr>
                <div class="col-md-4 col-xs-12 pull pull-left">
                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-3 control-label" style="text-align:left;">Type</label>
                    <div class="col-sm-7" style="padding-top:5px;">
					
					<input type="radio" class="radioBtnClass" name="current_period_assign" value="parcel" onclick="show_service()" checked /><label class="lblcls"  style="margin-left: 7px; margin-right: 7px;">Parcel</label>
					<input type="radio" class="radioBtnClass" name="current_period_assign" value="table" onclick="show_service()" /><label class="lblcls"  style="margin-left: 7px; margin-right: 7px;">Table</label>
                     
                    </div>
                  </div>

                </div>

                <div class="col-md-8" style="display:none" id="tables">

                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-2 control-label" style="text-align:left;">Table</label>
                    <div class="col-sm-3">
                      <select class="form-control" id="table_name" name="table_name">
                        <?php foreach ($table_data as $key => $value): ?>
                          <option value="<?php echo $value['id'] ?>"><?php echo $value['table_name'] ?></option>  
                        <?php endforeach ?>
                        
                      </select>
                    </div>
                  </div>

                </div>
                
                
                <br /> <br/>
				
				 <div class="col-md-12 col-xs-12 pull pull-left">

                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-1 control-label" style="text-align:left;">Menu</label>
                    <div class="col-sm-3">
					 <select class="form-control select_group product" data-row-id="row_1" id="product" name="product" style="width:100%;" onchange="totalrr()" required>
                            <option value="">Select</option>
                            <?php   foreach ($products as $k => $v): ?>
                              <option value="<?php echo $v['id'] ?>" alt="<?php echo $v['price']; ?>"><?php echo $v['name'] ?></option>
                            <?php endforeach ?>
                          </select>
                     
                    </div>
                  </div>

                </div>
				<br /> <br/>

            
				  
				    <div class="col-md-8 pull pull-left">
                <table class="table table-bordered table-hover" id="product_info_table">
                  <thead>
                    <tr>
                      <th style="width:40%">Item</th>
                      <th style="width:15%">Qty</th>
                      <th style="width:15%">Rate</th>
                      <th style="width:20%">Amount</th>
                      <th style="width:10%"><button type="button" id="add_rows" class="btn btn-info"><i class="fa fa-close"></i></button></th>
                    </tr>
                  </thead>

                   <tbody>
                     <!--<tr id="row_1">
                       <td>
                        <select class="form-control select_group product" data-row-id="row_1" id="product_1" name="product[]" style="width:100%;" onchange="getProductData(1)" required>
                            <option value=""></option>
                            <?php foreach ($products as $k => $v): ?>
                              <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                            <?php endforeach ?>
                          </select>
                        </td>
                        <td><input type="text" name="qty[]" id="qty_1" class="form-control" required onkeyup="getTotal(1)"></td>
                        <td>
                          <input type="text" name="rate[]" id="rate_1" class="form-control" disabled autocomplete="off">
                          <input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control" autocomplete="off">
                        </td>
                        <td>
                          <input type="text" name="amount[]" id="amount_1" class="form-control" disabled autocomplete="off">
                          <input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control" autocomplete="off">
                        </td>
                        <td><button type="button" class="btn btn-danger" onclick="removeRow('1')"><i class="fa fa-close"></i></button></td>
                     </tr>-->
                   </tbody>
                </table></div>

                

                <div class="col-md-4 col-xs-12 pull pull-right">
				
				

                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label">Gross Amount</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="gross_amount" name="gross_amount" disabled autocomplete="off">
                      <input type="hidden" class="form-control" id="gross_amount_value" name="gross_amount_value" autocomplete="off">
                    </div>
                  </div>
                  <?php  /* if($is_service_enabled == true): ?>
                  <div class="form-group">
                    <label for="service_charge" class="col-sm-5 control-label">S-Charge: <?php echo $company_data['service_charge_value'] ?> %</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="service_charge" name="service_charge" disabled autocomplete="off">
                      <input type="hidden" class="form-control" id="service_charge_value" name="service_charge_value" autocomplete="off">
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php if($is_vat_enabled == true): ?>
                  <div class="form-group">
                    <label for="vat_charge" class="col-sm-5 control-label">Vat <?php echo $company_data['vat_charge_value'] ?> %</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="vat_charge" name="vat_charge" disabled autocomplete="off">
                      <input type="hidden" class="form-control" id="vat_charge_value" name="vat_charge_value" autocomplete="off">
                    </div>
                  </div>
                  <?php endif; */ ?>
                  <div class="form-group">
                    <label for="discount" class="col-sm-5 control-label">Discount</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" onkeyup="subAmount()" autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="net_amount" class="col-sm-5 control-label">Net Amount</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="net_amount" name="net_amount" disabled autocomplete="off">
                      <input type="hidden" class="form-control" id="net_amount_value" name="net_amount_value" autocomplete="off">
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label">Payment Mode</label>
                    <div class="col-sm-7">
                      <input type="radio" class="radioBtnClass" name="payment_mode" value="phonepe" onclick="subAmount()" id="payment_modes" checked /><span class="lblcls"  style="margin-left: 5px; margin-right: 2px;">Online</span>
					<input type="radio" class="radioBtnClass" name="payment_mode" value="cash" onclick="subAmount()" /><span class=""  style="margin-left: 5px; margin-right: 2px;">Cash</span>
					<input type="radio" class="radioBtnClass" name="payment_mode" value="both" onclick="subAmount()"  /><span class="lblcls"  style="margin-left: 5px; margin-right: 2px;">Both</span>
					<!--<input type="radio" class="radioBtnClass" name="payment_mode" value="udhari" onclick="show_service2()" /><label class="lblcls"  style="margin-left: 7px; margin-right: 7px;">U</label>-->
                    </div>
                  </div>
				  
				  <!-- <div class="form-group">
					<label for="gross_amount" class="col-sm-5 control-label">Send Bill</label>
                    <div class="col-sm-7">
					<input type="checkbox" class="radioBtnClass" name="send_bill" value="WhatsApp" onclick=""/>
					<span class="lblcls"  style="margin-left: 5px; margin-right: 2px;">WhatsApp</span>
					<input type="checkbox" class="radioBtnClass" name="send_bill" value="Email" onclick=""/>
					<span class="lblcls"  style="margin-left: 5px; margin-right: 2px;">Email</span>
                    </div>
                  </div>-->
				  
				  <div class="form-group">
					<label for="gross_amount" class="col-sm-5 control-label">Both Payment</label>
                    <div class="col-sm-7">
					<div class="col-sm-6" style="padding-left:0px; padding-right:7px">
					 <input type="number" class="form-control" id="phonepe_amount" name="phonepe_amount" autocomplete="off" placeholder="phone pe" disabled>
					 <input type="hidden" class="form-control" id="phonepe_amount_value" name="phonepe_amount_value" autocomplete="off"></div>
					 <div class="col-sm-6" style="padding-right:0px;padding-left:7px">
                     <input type="number"  placeholder="cash" class="form-control" id="cash_amount" name="cash_amount" autocomplete="off" disabled>
					 
					 <input type="hidden" class="form-control" id="cash_amount_value" name="cash_amount_value" autocomplete="off"></div>
                    </div>
                  </div>
				  
				  
				  
				  <div class="form-group">
                    <label for="paid_status" class="col-sm-5 control-label">Paid Status</label>
                    <div class="col-sm-7">
                      <select type="text" class="form-control" id="paid_status" name="paid_status">
                        <option value="1">Paid</option>
                        <option value="2">Unpaid</option>
                      </select>
                    </div>
                  </div>

                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer ">
			  <div class="pull pull-right">
			   <span id="error_msg2"  style="display:none"></span>
                <input type="hidden" name="service_charge_rate" value="<?php echo $company_data['service_charge_value'] ?>" autocomplete="off">
                <input type="hidden" name="vat_charge_rate" value="<?php echo $company_data['vat_charge_value'] ?>" autocomplete="off">
                <button type="button" onclick="save()" class="btn btn-success">Create Order</button>
                <a href="<?php echo base_url('orders/') ?>" class="btn btn-danger">Back</a>
              </div></div>
            </form>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- col-md-12 -->
    </div>
    <!-- /.row -->
    

  </section>
  <!-- /.content -->
  
  <div class="modal fade" tabindex="-1" role="dialog" id="addModaludhari">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add udhari</h4>
      </div>

      <form role="form" action="<?php echo base_url('category/create') ?>" method="post" id="createForm">

        <div class="modal-body">

          <div class="form-group">
            <label for="brand_name">Customer Name</label>
			
			 <select class="form-control" id="active" name="active">
              <option value="1">Active</option>
              <option value="2">Inactive</option>
            </select>
			
            
          </div>

          <div class="form-group">
            <label for="active">Mobile No</label>
           <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter category name" autocomplete="off">
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Save changes</button>
        </div>

      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="both">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add payment details</h4>
      </div>

      <form role="form" action="" method="" id="">

        <div class="modal-body row">
		  <div class="col-md-6  pull pull-left">
          <div class="form-group">
            <label for="brand_name">Online</label>
            <input type="number" class="form-control" id="online" name="online" placeholder="Enter online Amount" autocomplete="off">
          </div>
		  </div>
		<div class="col-md-6  pull pull-right">
          <div class="form-group">
            <label for="active">Cash</label>
			  <input type="number" class="form-control" id="cash" name="cash" placeholder="Enter Cash Amount" autocomplete="off">
          </div>
		  </div>
        </div>

        <div class="modal-footer">
		  <span id="error_msg"  style="display:none"></span>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" onclick="subboth()">Save changes</button>
        </div>

      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>






<div class="modal fade" tabindex="-1" role="dialog" id="both">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add User Details</h4>
      </div>

      <form role="form" action="" method="" id="">

        <div class="modal-body row">
		
		           <input type="checkbox" class="radioBtnClass" name="send_bill" value="WhatsApp" onclick=""/>
					<span class="lblcls"  style="margin-left: 5px; margin-right: 2px;">WhatsApp</span>
					<input type="checkbox" class="radioBtnClass" name="send_bill" value="Email" onclick=""/>
					<span class="lblcls"  style="margin-left: 5px; margin-right: 2px;">Email</span>
					
					
		  <div class="col-md-6  pull pull-left">
          <div class="form-group">
            <label for="brand_name">Mobile No</label>
            <input type="Number" class="form-control" id="online" name="online" placeholder="Enter Mobile No" autocomplete="off">
          </div>
		  </div>
		<div class="col-md-6  pull pull-right">
          <div class="form-group">
            <label for="active">Email ID</label>
			  <input type="email" class="form-control" id="cash" name="cash" placeholder="Enter Email" autocomplete="off">
          </div>
		  </div>
		  
		  <div class="col-md-6  pull pull-left">
          <div class="form-group">
            <label for="brand_name">C.Name</label>
            <input type="Number" class="form-control" id="online" name="online" placeholder="Enter Mobile No" autocomplete="off">
          </div>
		  </div>
		<div class="col-md-6  pull pull-right">
          <div class="form-group">
            <label for="active">Date of Birth</label>
			  <input type="Date" class="form-control" id="cash" name="cash" placeholder="Enter Email" autocomplete="off">
          </div>
		  </div>
		  
		  <div class="col-md-6  pull pull-left">
          <div class="form-group">
            <label for="brand_name">C.Name</label>
            <input type="Number" class="form-control" id="online" name="online" placeholder="Enter Mobile No" autocomplete="off">
          </div>
		  </div>
		<div class="col-md-6  pull pull-right">
          <div class="form-group">
            <label for="active">Date of Birth</label>
			  <input type="Date" class="form-control" id="cash" name="cash" placeholder="Enter Email" autocomplete="off">
          </div>
		  </div>
        </div>

        <div class="modal-footer">
		  <span id="error_msg"  style="display:none"></span>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" onclick="subboth()">Save changes</button>
        </div>

      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  var base_url = "<?php echo base_url(); ?>";

  $(document).ready(function() {
    $(".select_group").select2();
    // $("#description").wysihtml5();

    $("#OrderMainNav").addClass('active');
    $("#createOrderSubMenu").addClass('active');
    
    var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
        'onclick="alert(\'Call your custom code here.\')">' +
        '<i class="glyphicon glyphicon-tag"></i>' +
        '</button>'; 
  
    // Add new row in the table 
    $("#add_row").unbind('click').bind('click', function() {
      var table = $("#product_info_table");
      var count_table_tbody_tr = $("#product_info_table tbody tr").length;
      var row_id = count_table_tbody_tr + 1;

      $.ajax({
          url: base_url + '/orders/getTableProductRow/',
          type: 'post',
          dataType: 'json',
          success:function(response) {
            
              // console.log(reponse.x);
              /* var html = '<tr id="row_'+row_id+'">'+
                   '<td>'+ 
                    '<select class="form-control select_group product" data-row-id="'+row_id+'" id="product_'+row_id+'" name="product[]" style="width:100%;" onchange="getProductData('+row_id+')">'+
                        '<option value=""></option>';
                        $.each(response, function(index, value) {
                          html += '<option value="'+value.id+'">'+value.name+'</option>';             
                        });
                        
                      html += '</select>'+
                    '</td>'+ 
                    '<td><input type="number" name="qty[]" id="qty_'+row_id+'" class="form-control" onkeyup="getTotal('+row_id+')"></td>'+
                    '<td><input type="text" name="rate[]" id="rate_'+row_id+'" class="form-control" disabled><input type="hidden" name="rate_value[]" id="rate_value_'+row_id+'" class="form-control"></td>'+
                    '<td><input type="text" name="amount[]" id="amount_'+row_id+'" class="form-control" disabled><input type="hidden" name="amount_value[]" id="amount_value_'+row_id+'" class="form-control"></td>'+
                    '<td><button type="button" class="btn btn-default" onclick="removeRow(\''+row_id+'\')"><i class="fa fa-close"></i></button></td>'+
                    '</tr>';

                if(count_table_tbody_tr >= 1) {
                $("#product_info_table tbody tr:last").after(html);  
              }
              else {
                $("#product_info_table tbody").html(html);
              }

              $(".product").select2();*/
			  
			  
			   var html = '<tr id="row_'+row_id+'">'+
                   '<td>'+ +
                    '</td>'+ 
                    '<td><input type="number" name="qty[]" id="qty_'+row_id+'" class="form-control" onkeyup="getTotal('+row_id+')"></td>'+
                    '<td><input type="text" name="rate[]" id="rate_'+row_id+'" class="form-control" disabled><input type="hidden" name="rate_value[]" id="rate_value_'+row_id+'" class="form-control"></td>'+
                    '<td><input type="text" name="amount[]" id="amount_'+row_id+'" class="form-control" disabled><input type="hidden" name="amount_value[]" id="amount_value_'+row_id+'" class="form-control"></td>'+
                    '<td><button type="button" class="btn btn-default" onclick="removeRow(\''+row_id+'\')"><i class="fa fa-close"></i></button></td>'+
                    '</tr>';

                if(count_table_tbody_tr >= 1) {
                $("#product_info_table tbody tr:last").after(html);  
              }
              else {
                $("#product_info_table tbody").html(html);
              }

              $(".product").select2();

          }
        });

      return false;
    });

  }); // /document
  
  function show_service(){
	  //alert($('input[name="current_period_assign"]:checked').val());
	  if ($('input[name="current_period_assign"]:checked').val() == 'table') {
		  $('#tables').show();
	  }else{
		  $('#tables').hide();
	  }
  }
  
  function subboth(){
	  var online=$('#online').val();
	  var cash=$('#cash').val();
	  var net_amount=$('#net_amount').val();
	  var total= parseInt(online) + parseInt(cash);
	 
	  if(online=="" || online=="0"){
		  
	$("#error_msg").show();
       $("#error_msg").text("Please enter online amount");
       setTimeout(function(){
 	$("#error_msg").html("").hide();
 	 },4000);
		  
	  }else if(cash=="" || cash=="0"){
		  
		  $("#error_msg").show();
       $("#error_msg").text("Please enter cash amount");
       setTimeout(function(){
 	$("#error_msg").html("").hide();
 	 },4000);
		  
	  }else if(total!=net_amount){
		  
		  
		  $("#error_msg").show();
       $("#error_msg").text("addition of phone pe and cash equal to net amount");
       setTimeout(function(){
 	$("#error_msg").html("").hide();
 	 },4000);
	  }
	  
	 
  }
  
  function closes(){
	  
	$('input[id="payment_modes"]').prop('checked',true);  
	
  }
  
function show_service2(){
	  //alert($('input[name="current_period_assign"]:checked').val());
	  
	  if ($('input[name="payment_mode"]:checked').val() == 'both') {
		  
		 $('#both').modal('show');
		  
	  }else if($('input[name="payment_mode"]:checked').val() == 'udhari'){
		  
		 $('#addModaludhari').modal('show');
		  
	  }else{
		  
	  }
  }
    
  
 function userdetails(){
	 
	 if($('input[name="sendbill"]:checked')==true){
		 $('#userdetails'),val();
	 }
	 
 } 
 
 function save(){
	 
	 var product_val = $("#table_name option:selected").val();
	  if ($('input[name="current_period_assign"]:checked').val() == 'table') {
		  if(product_val==''){
			  //alert('Please select table');
				$("#error_msg2").show();
				$("#error_msg2").text("Please select table");
				setTimeout(function(){
				$("#error_msg2").html("").hide();
				},4000);
			  
			  
			  
			   return false;
			  
		  }
		  
	  }
	  
	  var productts=[];
	  
	  $(".products").each(function() {
		   
		productts.push( $(this).val());
		
	   });
	
	  
	  if(productts.length==0){
		  
		  $("#error_msg2").show();
				$("#error_msg2").text("Please add at one item in list");
				setTimeout(function(){
				$("#error_msg2").html("").hide();
				},4000);
		    return false;
	   }
	   
	   
	   if($('input[name="payment_mode"]:checked').val() == 'both'){
		   
		    var online=$('#online').val();
	  var cash=$('#cash').val();
	  var net_amount=$('#net_amount').val();
	  var total= parseInt(online) + parseInt(cash);
	 
	  if(online=="" || online=="0"){
		  
	$("#error_msg2").show();
       $("#error_msg2").text("Please enter online amount");
       setTimeout(function(){
 	$("#error_msg2").html("").hide();
 	 },4000);
	 return false;
		  
	  }else if(cash=="" || cash=="0"){
		  
		  $("#error_msg2").show();
       $("#error_msg2").text("Please enter cash amount");
       setTimeout(function(){
 	$("#error_msg2").html("").hide();
 	 },4000);
	 return false;
		  
	  }else if(total!=net_amount){
		  
		  
		  $("#error_msg2").show();
       $("#error_msg2").text("addition of phone pe and cash equal to net amount");
       setTimeout(function(){
 	$("#error_msg2").html("").hide();
 	 },4000);
	 
	 return false;
	  }
		   
	   }
	 
	   $('#forms').submit();
  }
 function totalrr(){
	 
	 
	  var table = $("#product_info_table");
      var count_table_tbody_tr = $("#product_info_table tbody tr").length;
      var row_id = count_table_tbody_tr + 1;
	  
	   var product = $("#product option:selected").text();
	   var product_val = $("#product option:selected").val();
	   var price = $("#product option:selected").attr('alt');
	   var quantity = 1;  //$("#quantity").val();
	   
	   var productts=[];
	   $(".products").each(function() {
		   
		productts.push( $(this).val());
		
	   });
	   
	   if(product_val!=''){
		  
		   if(jQuery.inArray(product_val, productts) !== -1){
			   
			   alert('This item alredy selected in list');
			   
		   }else{
			   
		   
	   
	   var total = Number(price) * Number(quantity);
          total = total.toFixed(2);
	  
	  
	  var html = '<tr id="row_'+row_id+'">'+
                   '<td>'+product+'<input type="hidden" name="product[]" id="product_'+row_id+'" class="form-control products" onkeyup="" value="'+product_val+'"></td><td><input type="number" name="qty[]" id="qty_'+row_id+'" class="form-control" onkeyup="getTotal('+row_id+')" value="'+quantity+'"></td>'+
                    '<td><input type="text" name="rate[]" id="rate_'+row_id+'" value="'+price+'" class="form-control" disabled><input type="hidden" name="rate_value[]" id="rate_value_'+row_id+'" class="form-control" value="'+price+'"></td>'+
                    '<td><input type="text" name="amount[]" id="amount_'+row_id+'" class="form-control" disabled value="'+total+'"><input type="hidden" name="amount_value[]" id="amount_value_'+row_id+'" class="form-control" value="'+total+'"></td>'+
                    '<td><button type="button" class="btn btn-default" onclick="removeRow(\''+row_id+'\')"><i class="fa fa-close"></i></button></td>'+
                    '</tr>';

                if(count_table_tbody_tr >= 1) {
                $("#product_info_table tbody tr:last").after(html);  
              }
              else {
                $("#product_info_table tbody").html(html);
              }

              $(".product").select2();
			  
			  getTotal(row_id);
			  $('#product').val("").trigger("change");
			  //$('#quntity').val('');
			  
		   }
	   }
 }

  function getTotal(row = null) {
    if(row) {
      var total = Number($("#rate_value_"+row).val()) * Number($("#qty_"+row).val());
      total = total.toFixed(2);
      $("#amount_"+row).val(total);
      $("#amount_value_"+row).val(total);
      
      subAmount();

    } else {
      alert('no row !! please refresh the page');
    }
  }

  // get the product information from the server
  function getProductData(row_id)
  {
    var product_id = $("#product_"+row_id).val();    
    if(product_id == "") {
      $("#rate_"+row_id).val("");
      $("#rate_value_"+row_id).val("");

      $("#qty_"+row_id).val("");           

      $("#amount_"+row_id).val("");
      $("#amount_value_"+row_id).val("");

    } else {
      $.ajax({
        url: base_url + 'orders/getProductValueById',
        type: 'post',
        data: {product_id : product_id},
        dataType: 'json',
        success:function(response) {
          // setting the rate value into the rate input field
          
          $("#rate_"+row_id).val(response.price);
          $("#rate_value_"+row_id).val(response.price);

          $("#qty_"+row_id).val(1);
          $("#qty_value_"+row_id).val(1);

          var total = Number(response.price) * 1;
          total = total.toFixed(2);
          $("#amount_"+row_id).val(total);
          $("#amount_value_"+row_id).val(total);
          
          subAmount();
        } // /success
      }); // /ajax function to fetch the product data 
    }
  }

  // calculate the total amount of the order
  function subAmount() {
   // var service_charge = <?php echo ($company_data['service_charge_value'] > 0) ? $company_data['service_charge_value']:0; ?>;
   // var vat_charge = <?php echo ($company_data['vat_charge_value'] > 0) ? $company_data['vat_charge_value']:0; ?>;

    var tableProductLength = $("#product_info_table tbody tr").length;
    var totalSubAmount = 0;
    for(x = 0; x < tableProductLength; x++) {
      var tr = $("#product_info_table tbody tr")[x];
      var count = $(tr).attr('id');
      count = count.substring(4);

      totalSubAmount = Number(totalSubAmount) + Number($("#amount_"+count).val());
    } // /for

    totalSubAmount = totalSubAmount.toFixed(2);

    // sub total
    $("#gross_amount").val(totalSubAmount);
    $("#gross_amount_value").val(totalSubAmount);

  /*  // vat
    var vat = (Number($("#gross_amount").val())/100) * vat_charge;
    vat = vat.toFixed(2);
    $("#vat_charge").val(vat);
    $("#vat_charge_value").val(vat);

    // service
    var service = (Number($("#gross_amount").val())/100) * service_charge;
    service = service.toFixed(2);
    $("#service_charge").val(service);
    $("#service_charge_value").val(service); */
    
    // total amount
   // var totalAmount = (Number(totalSubAmount) + Number(vat) + Number(service));
   
    var totalAmount = (Number(totalSubAmount));
   
    totalAmount = totalAmount.toFixed(2);
    // $("#net_amount").val(totalAmount);
    // $("#totalAmountValue").val(totalAmount);

    var discount = $("#discount").val();
    if(discount) {
      var grandTotal = Number(totalAmount) - Number(discount);
      grandTotal = grandTotal.toFixed(2);
      $("#net_amount").val(grandTotal);
      $("#net_amount_value").val(grandTotal);
    } else {
      $("#net_amount").val(totalAmount);
      $("#net_amount_value").val(totalAmount);
      
    } // /else discount 
	
	  if ($('input[name="payment_mode"]:checked').val() == 'phonepe') {
		  $("#phonepe_amount").prop('disabled',true); 
	  $("#cash_amount").prop('disabled',true); 
	  $("#phonepe_amount").prop('disabled',true); 
	  $("#cash_amount").prop('disabled',true); 
      $("#phonepe_amount").val(totalAmount);
      $("#phonepe_amount_value").val(totalAmount);	
      $("#cash_amount").val(0);
      $("#cash_amount_value").val(0);	  
		  
	  }else if($('input[name="payment_mode"]:checked').val() == 'cash'){
	  
	  $("#phonepe_amount").prop('disabled',true); 
	  $("#cash_amount").prop('disabled',true); 
	  $("#phonepe_amount").val(0);
      $("#phonepe_amount_value").val(0);	
      $("#cash_amount").val(totalAmount);
      $("#cash_amount_value").val(totalAmount);	 
	  
	  }else{
		  
	  $("#phonepe_amount").prop('disabled',false); 
	  $("#cash_amount").prop('disabled',false); 
	  $("#phonepe_amount").val(0);
      $("#phonepe_amount_value").val(0);	
      $("#cash_amount").val(0);
      $("#cash_amount_value").val(0);	 
		  
	  }
	
	
	

  } // /sub total amount

  function removeRow(tr_id)
  {
    $("#product_info_table tbody tr#row_"+tr_id).remove();
    subAmount();
  }
</script>