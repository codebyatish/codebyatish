

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<style>

.select2-container .select2-selection--single {
	height:34px;
}</style>
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
          <div class="box-header">
            <div class="box-header" style="padding:3px">
		  
			<div class="col-md-4 col-xs-12 pull pull-right" style="text-align:right">
			
                  <label for="gross_amount" class="control-label">Date: <?php echo date('Y-m-d') ?></label>
				  <label for="gross_amount" class="control-label">Time: <?php echo date('h:i a') ?></label>
            
                </div>
          </div>
          </div>
          <!-- /.box-header -->
          <form role="form" action="<?php base_url('orders/create') ?>" id="forms" method="post" class="form-horizontal">
              <div class="box-body">

                <?php echo validation_errors(); ?>
				        <div class="row">
                      <div class="col-md-3">
                        <label for="customer_name">Customer Name</label>
                        <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter Name" value="<?php echo $customer['customer_name']; ?>">
                      </div>
                      <div class="col-md-3">
                        <label for="customer_mobile_number">Mobile   Number</label>
                        <input type="number" class="form-control" id="customer_mobile_number" name="customer_mobile_number" placeholder="Enter Mobile Number" value="<?php echo $customer['customer_mobile_number']; ?>">
                      </div>
                      <div class="col-md-3">
                        <label for="customer_email">Email</label>
                        <input type="email" class="form-control" id="customer_email" name="customer_email" placeholder="Enter Email" value="<?php echo $customer['customer_email']; ?>">
                      </div>
                      <div class="col-md-3">
                        <label for="customer_date_of_birth">Date of Birth</label>
                        <input type="date" class="form-control" id="customer_date_of_birth" name="customer_date_of_birth" value="<?php echo $customer['customer_date_of_birth']; ?>">
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
                          <option value="<?php echo $value['id'] ?>" <?php if($order_data['order']['table_id'] == $value['id']) { echo 'selected="selected"'; } ?> ><?php echo $value['table_name'] ?></option>  
                        <?php endforeach; ?>
                        
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

                <!--<div class="col-md-4 col-xs-12 pull pull-left">

                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">Table</label>
                    <div class="col-sm-7">
                      <select class="form-control" id="table_name" name="table_name">
                        <?php if($order_data['order_table']['id']): ?>
                          <option value="<?php echo $order_data['order_table']['id']; ?>" <?php if($order_data['order_table']['id'] == $order_data['order']['table_id']) { echo "selected='selected'"; } ?> ><?php echo $order_data['order_table']['table_name']; ?></option>
                        <?php endif; ?>

                        <?php foreach ($table_data as $key => $value): ?>
                          <option value="<?php echo $value['id'] ?>" <?php if($order_data['order']['table_id'] == $value['id']) { echo 'selected="selected"'; } ?> ><?php echo $value['table_name'] ?></option>  
                        <?php endforeach; ?>
                        
                      </select>
                    </div>
                  </div>

                  
                </div>-->
                
                <br /> <br/>
				
				<div class="col-md-8 pull pull-left">
                <table class="table table-bordered table-hover" id="product_info_table">
                  <thead>
                    <tr>
                      <th style="width:40%">Product</th>
                      <th style="width:20%">Qty</th>
                      <th style="width:10%">Rate</th>
                      <th style="width:20%">Amount</th>
                      <th style="width:10%"><button type="button" id="add_row" class="btn btn-info"><i class="fa fa-plus"></i></button></th>
                    </tr>
                  </thead>

                   <tbody>

                    <?php if(isset($order_data['order_item'])): ?>
                      <?php $x = 1; ?>
                      <?php foreach ($order_data['order_item'] as $key => $val): ?>
                        <?php //print_r($v); ?>
                       <tr id="row_<?php echo $x; ?>">
                         <td>
						 
						 <input type="hidden" name="product[]" id="product_<?php echo $x; ?>" class="form-control products" onkeyup="" value="<?php echo $val['product_id']; ?>">
						 
                          <!--<select class="form-control select_group product" data-row-id="row_<?php echo $x; ?>" id="product_<?php echo $x; ?>" name="product[]" style="width:100%;" onchange="getProductData(<?php echo $x; ?>)" required>
                              <option value=""></option>
                              
                            </select>-->
							
							<?php foreach ($products as $k => $v): ?>
                                <?php if($val['product_id'] == $v['id']) { echo $v['name']; }   
                               endforeach ?>
                          </td>
                          <td><input type="text" name="qty[]" id="qty_<?php echo $x; ?>" class="form-control" required onkeyup="getTotal(<?php echo $x; ?>)" value="<?php echo $val['qty'] ?>" autocomplete="off"></td>
                          <td>
                            <input type="text" name="rate[]" id="rate_<?php echo $x; ?>" class="form-control" disabled value="<?php echo $val['rate'] ?>" autocomplete="off">
                            <input type="hidden" name="rate_value[]" id="rate_value_<?php echo $x; ?>" class="form-control" value="<?php echo $val['rate'] ?>" autocomplete="off">
                          </td>
                          <td>
                            <input type="text" name="amount[]" id="amount_<?php echo $x; ?>" class="form-control" disabled value="<?php echo $val['amount'] ?>" autocomplete="off">
                            <input type="hidden" name="amount_value[]" id="amount_value_<?php echo $x; ?>" class="form-control" value="<?php echo $val['amount'] ?>" autocomplete="off">
                          </td>
                          <td><button type="button" class="btn btn-danger" onclick="removeRow('<?php echo $x; ?>')"><i class="fa fa-close"></i></button></td>
                       </tr>
                       <?php $x++; ?>
                     <?php endforeach; ?>
                   <?php endif; ?>
                   </tbody>
                </table>
				</div>
			

             
				
				
				<div class="col-md-4 col-xs-12 pull pull-right">
				
				

                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label">Gross Amount</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="gross_amount" name="gross_amount" disabled autocomplete="off" value="<?php echo $order_data['order']['gross_amount'] ?>">
                      <input type="hidden" class="form-control" id="gross_amount_value" name="gross_amount_value" autocomplete="off" value="<?php echo $order_data['order']['gross_amount'] ?>">
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
                      <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" onkeyup="subAmount()" autocomplete="off" value="<?php echo $order_data['order']['discount'] ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="net_amount" class="col-sm-5 control-label">Net Amount</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="net_amount" name="net_amount" disabled autocomplete="off"  value="<?php echo $order_data['order']['net_amount'] ?>">
                      <input type="hidden" class="form-control" id="net_amount_value" name="net_amount_value" autocomplete="off"  value="<?php echo $order_data['order']['net_amount'] ?>">
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
				  
				   <div class="form-group">
					<label for="gross_amount" class="col-sm-5 control-label">Both Payment</label>
                    <div class="col-sm-7">
					<div class="col-sm-6" style="padding-left:0px; padding-right:7px">
					 <input type="number" class="form-control" id="phonepe_amount" name="phonepe_amount" autocomplete="off" placeholder="phone pe"  value="<?php echo $order_data['order']['online'] ?>" disabled>
					 <input type="hidden" class="form-control" id="phonepe_amount_value" name="phonepe_amount_value" autocomplete="off" value="<?php echo $order_data['order']['online'] ?>"></div>
					 <div class="col-sm-6" style="padding-right:0px;padding-left:7px">
                     <input type="number"  placeholder="cash" class="form-control" id="cash_amount" name="cash_amount" autocomplete="off" value="<?php echo $order_data['order']['cash'] ?>" disabled>
					 
					 <input type="hidden" class="form-control" id="cash_amount_value" name="cash_amount_value" autocomplete="off" value="<?php echo $order_data['order']['cash'] ?>"></div>
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

               <!-- <div class="col-md-6 col-xs-12 pull pull-right">

                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label">Gross Amount</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="gross_amount" name="gross_amount" disabled value="<?php echo $order_data['order']['gross_amount'] ?>" autocomplete="off">
                      <input type="hidden" class="form-control" id="gross_amount_value" name="gross_amount_value" value="<?php echo $order_data['order']['gross_amount'] ?>" autocomplete="off">
                    </div>
                  </div>
                  <?php if($is_service_enabled == true): ?>
                  <div class="form-group">
                    <label for="service_charge" class="col-sm-5 control-label">S-Charge <?php echo $company_data['service_charge_value'] ?> %</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="service_charge" name="service_charge" disabled value="<?php echo $order_data['order']['service_charge_amount'] ?>" autocomplete="off">
                      <input type="hidden" class="form-control" id="service_charge_value" name="service_charge_value" value="<?php echo $order_data['order']['service_charge_amount'] ?>" autocomplete="off">
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php if($is_vat_enabled == true): ?>
                  <div class="form-group">
                    <label for="vat_charge" class="col-sm-5 control-label">Vat <?php echo $company_data['vat_charge_value'] ?> %</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="vat_charge" name="vat_charge" disabled value="<?php echo $order_data['order']['vat_charge_amount'] ?>" autocomplete="off">
                      <input type="hidden" class="form-control" id="vat_charge_value" name="vat_charge_value" value="<?php echo $order_data['order']['vat_charge_amount'] ?>" autocomplete="off">
                    </div>
                  </div>
                  <?php endif; ?>
                  <div class="form-group">
                    <label for="discount" class="col-sm-5 control-label">Discount</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" onkeyup="subAmount()" value="<?php echo $order_data['order']['discount'] ?>" autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="net_amount" class="col-sm-5 control-label">Net Amount</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="net_amount" name="net_amount" disabled value="<?php echo $order_data['order']['net_amount'] ?>" autocomplete="off">
                      <input type="hidden" class="form-control" id="net_amount_value" name="net_amount_value" value="<?php echo $order_data['order']['net_amount'] ?>" autocomplete="off">
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

                </div>-->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">

                <input type="hidden" name="service_charge_rate" value="<?php echo $company_data['service_charge_value'] ?>" autocomplete="off">
                <input type="hidden" name="vat_charge_rate" value="<?php echo $company_data['vat_charge_value'] ?>" autocomplete="off">

                <a target="__blank" href="<?php echo base_url() . 'orders/printDiv/'.$order_data['order']['id'] ?>" class="btn btn-default" >Print</a>
                <button type="button" class="btn btn-success" onclick="save()">Save Changes</button>
                <a href="<?php echo base_url('orders/') ?>" class="btn btn-danger">Back</a>
              </div>
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
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  var base_url = "<?php echo base_url(); ?>";

  // function printOrder(id)
  // {
  //   if(id) {
  //     $.ajax({
  //       url: base_url + 'orders/printDiv/' + id,
  //       type: 'post',
  //       success:function(response) {
  //         var mywindow = window.open('', 'new div', 'height=400,width=600');
  //         // mywindow.document.write('<html><head><title></title>');
  //         // mywindow.document.write('<link rel="stylesheet" href="<?php //echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" type="text/css" />');
  //         // mywindow.document.write('</head><body >');
  //         mywindow.document.write(response);
  //         // mywindow.document.write('</body></html>');

  //         mywindow.print();
  //         mywindow.close();

  //         return true;
  //       }
  //     });
  //   }
  // }

  $(document).ready(function() {
    $(".select_group").select2();
    // $("#description").wysihtml5();

    $("#OrderMainNav").addClass('active');
    $("#manageOrderSubMenu").addClass('active');
    
    
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
               var html = '<tr id="row_'+row_id+'">'+
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

              $(".product").select2();

          }
        });

      return false;
    });

  }); // /document
  
  
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

  
  
   function show_service(){
	  //alert($('input[name="current_period_assign"]:checked').val());
	  if ($('input[name="current_period_assign"]:checked').val() == 'table') {
		  $('#tables').show();
	  }else{
		  $('#tables').hide();
	  }
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
	  
	  var totalAmount=grandTotal;
    } else {
      $("#net_amount").val(totalAmount);
      $("#net_amount_value").val(totalAmount);
      
    } // /else discount 
	
	
	
	  if ($('input[name="payment_mode"]:checked').val() == 'phonepe') {
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
	
	
	

  } // /sub total amount // /sub total amount

  function paidAmount() {
    var grandTotal = $("#net_amount_value").val();

    if(grandTotal) {
      var dueAmount = Number($("#net_amount_value").val()) - Number($("#paid_amount").val());
      dueAmount = dueAmount.toFixed(2);
      $("#remaining").val(dueAmount);
      $("#remaining_value").val(dueAmount);
    } // /if
  } // /paid amoutn function

  function removeRow(tr_id)
  {
    $("#product_info_table tbody tr#row_"+tr_id).remove();
    subAmount();
  }
</script>