<?php

    include('include/header.php');
     
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
                  <button type="button" class="btn btn-primary" onclick="window.location.href = 'client.php';">Okay</button>
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
                  <button type="button" class="btn btn-primary" onclick="window.location.href = 'client.php';">Cancel</button>
                  <button type="button" class="btn btn-danger" onclick="delete_selected_record()">Delete</button>
              </div>
          </div>
      </div>
  </div>



<div id="page-wrapper">
	<div class="header">
		<h1 class="page-header">Recovery Test</h1>
		<ol class="breadcrumb">
		  <li><a href="#">Dashboard</a></li>
      <li><a href="#">Test Management</a></li>
		  <li class="active" ><a>Recovery Test</a></li>
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
                    <h3 class="card-title text-center">Emcure Test</h3>
                    <div class="row text-center">
                      <a href="rt_emcure_test.php" class="btn btn-primary btn-sm mt-15">View More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title text-center">Indoco Test</h3>
                    <div class="row text-center">
                      <a href="rt_indoco_test.php" class="btn btn-primary btn-sm mt-15">View More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title text-center">RTML Test</h3>
                    <div class="row text-center">
                      <a href="rt_rtml_test.php" class="btn btn-primary btn-sm mt-15">View More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title text-center">Cummins Test</h3>
                    <div class="row text-center">
                      <a href="rt_cummins_test.php" class="btn btn-primary btn-sm mt-15">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row mt-15">
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title text-center">IPCA Test</h3>
                    <div class="row text-center">
                      <a href="rt_ipca_test.php" class="btn btn-primary btn-sm mt-15">View More</a>
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
	

$(document).ready(function() {


});



</script>

