<?php

	include("include/header.php");




?>		
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Admin!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->



						<div class="row">

							<?php
								$evidence_query = "SELECT count(*) as ToatalEvidences FROM EMS_Evidences";
								$evidence_result = mysqli_query($con,$evidence_query);
								$evidence_row = mysqli_fetch_array($evidence_result,MYSQLI_BOTH);

								$ToatalEvidences = $evidence_row["ToatalEvidences"];
								if($ToatalEvidences == '' || $ToatalEvidences == null)
								{
									$ToatalEvidences = 0;
								}
		                    ?>  
							<div class="col-xl-3 col-sm-6 col-12">

								<div class="card">
									<div class="card-body bg-danger" style="color: white;box-shadow: 5px 5px 5px 0px #0000002b;" >
										<div class="dash-widget-info">
											<h2><?php echo $ToatalEvidences; ?></h2>
											<h4 style="font-weight: bold;" >एकूण मुद्देमाल</h4>
										</div>
									</div>
									<!-- <a class="card-footer bg-danger" href="javascript:void(0)" style="color: white;">View Details<i class="fa fa-angle-right" style="float: right;margin-top: 3px;font-weight: bold;" ></i></a> -->
								</div>
							</div>


							<?php
								$disposed_query = "SELECT count(*) as ToatalDisposedCases FROM View_EMS_Evidences WHERE CaseDisposed = 1";
								$disposed_result = mysqli_query($con,$disposed_query);
								$disposed_row = mysqli_fetch_array($disposed_result,MYSQLI_BOTH);

								$ToatalDisposedCases = $disposed_row["ToatalDisposedCases"];
								if($ToatalDisposedCases == '' || $ToatalDisposedCases == null)
								{
									$ToatalDisposedCases = 0;
								}
		                    ?> 
							<div class="col-xl-3 col-sm-6 col-12">



								<div class="card">
									<div class="card-body bg-primary" style="color: white;box-shadow: 5px 5px 5px 0px #0000002b;">
										<div class="dash-widget-info">
											<h2><?php echo $ToatalDisposedCases; ?></h2>
											<h4>डिस्पोज केलेला मुद्देमाल</h4>
										</div>
									</div>
									<!-- <a class="card-footer bg-primary" href="javascript:void(0)" style="color: white;">View Details<i class="fa fa-angle-right" style="float: right;margin-top: 3px;font-weight: bold;" ></i></a> -->
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="card" style="    box-shadow: 5px 5px 5px 0px #0000002b;">
									<div class="card-body bg-success" style="color: white;">
										<div class="dash-widget-info">
											<h4>गोषवारा</h4>
										</div>
									</div>
									<a class="card-footer bg-success" href="javascript:void(0)" style="color: white;" onclick="DashboardDatatable('view_goshwara_details')" >View Details<i class="fa fa-angle-right" style="float: right;margin-top: 3px;font-weight: bold;" ></i></a>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="card" style="    box-shadow: 5px 5px 5px 0px #0000002b;">
									<div class="card-body bg-warning" style="color: white;">
										<div class="dash-widget-info">
											<h4>User Guide</h4>
										</div>
									</div>
									<a class="card-footer bg-warning" href="javascript:void(0)" style="color: white;">View Details<i class="fa fa-angle-right" style="float: right;margin-top: 3px;font-weight: bold;" ></i></a>
								</div>
							</div>
						</div>




				 <div class="row" id="dashboard_datatable" style="display: none;" >
		            <div class="col-md-12">
		              <div class="card">
		              	<div class="card-header" >
		              		<div class="form-group row">
	                          <div class="col-md-4">
	                              <b>Select Date :</b>
	                              <div class="input-group">
	                                <input type="text" class="form-control datepicker" id="filter_select_date" name="filter_select_date" placeholder="Select Date" aria-describedby="select_date" style="text-indent: 10px;"  autocomplete="off" >
	                                <div class="input-group-append">
	                                  <span class="fa fa-search btn btn-primary" id="select_date" style="padding-top: 10px;cursor: pointer;" onclick="DashboardDatatable();" ></span>
	                                </div>
	                              </div>
	                          </div>

	                          <div class="col-md-4"></div>
	                          <div class="col-md-4"  style="text-align: end;">
	                          	<a href="javascript:void(0)" id="DataTablePrint" class="btn btn-success" style="color: white;" onclick="PrintDatatable()" >Print<i class="fa fa-print" style="float: right;margin-top: 3px;padding-left: 5px;" ></i></a>
	                          </div>
	                        </div>
		              	</div>
		                <div class="card-body">
		                  <div style="margin-top: 10px;" id="DashboardDatatable" class="table-responsive"></div>
		                </div>
		              </div>

		              <div class="card">
		              	<div class="card-header" >
		              		<div class="form-group row">
	                          <div class="col-md-4">
	                              <b>Select Year :</b>
	                              <div class="input-group">
	                              	<select name="select_year" id="select_year" class="form-control"  onchange="DashboardDatatable()" ></select>
	                              </div>
	                          </div>
	                        </div>
		              	</div>
		                <div class="card-body">
		                  <div style="margin-top: 10px;" id="DashboardDatatableYearWise" class="table-responsive"></div>
		                </div>
		              </div>

		            </div>
		          </div>


		</div>			
	</div>
	<!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->
		
<?php

  include("include/footer.php");

?>  




<script type="text/javascript">


$('.datepicker').datepicker({
    format: 'dd-mm-yyyy',
    autoclose: true
});


function PrintDatatable() 
{

  var dashboard_datatable = document.getElementById('dashboard_datatable');


  var newWin = window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+dashboard_datatable.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}


for (i = new Date().getFullYear(); i > 2000; i--)
{
    $('#select_year').append($('<option />').val(i).html(i));
}



function DashboardDatatable(task)
{ 
	var filter_select_date = $("#filter_select_date").val();
	var filter_select_year = $("#select_year").val();

	$('#dashboard_datatable').show();

    $('#DashboardDatatable').empty().append('<tr class="odd"><td valign="top" colspan="4" class="dataTables_empty">Loading...</td></tr>');
    $('#DashboardDatatableYearWise').empty().append('<tr class="odd"><td valign="top" colspan="4" class="dataTables_empty">Loading...</td></tr>');

    $.get("index_db_operations.php?select_date="+filter_select_date+"&filter_select_year="+filter_select_year+"&task=get_appointment_type_details", function() {}).done(function(data) 
    {
        
        var result = data.split("~");
        var CountTable = result[0].trim();
        var YearWiseCountTable = result[1].trim();
        //console.log(YearWiseCountTable);
        if (data) 
        {
			$('#DashboardDatatable').empty().append(CountTable);
			$('#goshwara_details_datatable').DataTable();
			$('#DashboardDatatableYearWise').empty().append(YearWiseCountTable);
			$('#goshwara_details_datatable_for_year').DataTable();

        }else
        {
        	$('#DashboardDatatable').empty().append('<tr class="odd"><td valign="top" colspan="4" class="dataTables_empty"> Data Not Available</td></tr>');
        	$('#DashboardDatatableYearWise').empty().append('<tr class="odd"><td valign="top" colspan="4" class="dataTables_empty"> Data Not Available</td></tr>');
        }
   }) 
}


</script>