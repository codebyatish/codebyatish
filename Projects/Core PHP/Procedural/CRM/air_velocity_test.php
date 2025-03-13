<?php

    include('include/header.php');
    $ClientId = $_REQUEST["id"];
    $TestName = $_REQUEST["tn"];
     
?>

<style type="text/css">
  .card{
        border: 0.5px solid #ccc;
    padding: 20px 20px;
  }
</style>
  <input type="hidden" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"  id="record_insert_model" >

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel"></h4>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="window.location.alt = 'client.php';">Okay</button>
              </div>
          </div>
      </div>
  </div>

  <div class="modal fade" id="myModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabelDelete" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabelDelete">Are you sure, you want to delete this record ?</h4>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="window.location.alt = 'client.php';">Cancel</button>
                  <button type="button" class="btn btn-danger" onclick="delete_selected_record()">Delete</button>
              </div>
          </div>
      </div>
  </div>



<div id="page-wrapper">
	<div class="header">
		<h1 class="page-header">Air Velocity Test</h1>
		<ol class="breadcrumb">
		  <li><a alt="#">Dashboard</a></li>
      <li><a href="test_management.php">Test Management</a></li>
		  <li class="active" ><a>Air Velocity Test</a></li>
   </ol> 
	</div>


	<div id="page-inner">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					<div class="panel-body" style="padding: 25px 25px;">

            <div class="row">
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title text-center">Emcure Template</h3>
                    <div class="row text-center">
                      <a href="javascript:void(0)" alt="av_emcure_test.php" clt="Emcure Template" class="btn btn-primary btn-sm mt-15 avt">View More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title text-center">Indoco Template</h3>
                    <div class="row text-center">
                      <a href="javascript:void(0)" alt="av_indoco_test.php" clt="Indoco Template" class="btn btn-primary btn-sm mt-15 avt">View More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title text-center">RTML Template</h3>
                    <div class="row text-center">
                      <a href="javascript:void(0)" alt="av_rtml_test.php" clt="RTML Template" class="btn btn-primary btn-sm mt-15 avt">View More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title text-center">Cummins Template</h3>
                    <div class="row text-center">
                      <a href="javascript:void(0)" alt="av_cummins_test.php" clt="Cummins Template" class="btn btn-primary btn-sm mt-15 avt">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row mt-15">
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title text-center">IPCA Template</h3>
                    <div class="row text-center">
                      <a href="javascript:void(0)" alt="av_ipca_test.php" clt="IPCA Template" class="btn btn-primary btn-sm mt-15 avt">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

					</div>



				</div>
			</div>
		</div>
	</div>



</div>
<?php

    include('include/footer.php');
    
?>

<script type="text/javascript">
	

$('.avt').click(function(e) {

  var TestName = "<?php echo $TestName;?>";
  var tm_select_client_id = "<?php echo $ClientId;?>";
  let url = "test_generation.php";
  let page_name = e.target.getAttribute("alt");
  let temlate_name = e.target.getAttribute("clt");
  window.location.href = url+"?id="+tm_select_client_id+"&tn="+TestName+"&temN="+temlate_name+"&pn="+page_name;


});


</script>

