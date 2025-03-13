<?php

	include("include/header.php");

?>		


      <!-- Page Wrapper -->
      <div class="page-wrapper">
        <div class="content container-fluid">
          <!-- Page Header -->
          <div class="page-header">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <h1 class="page-title text-center">जुना मुद्देमाल शोधा</h1> 
              </div>
              <div class="col-md-2"></div>
            </div>
          </div>
          <!-- /Page Header -->

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div style="margin-top: 10px;" id="CaseDatatable" class="table-responsive"></div>
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


$(document).ready(function() {

    CaseDatatable();
    let delete_selected_id_array=[];

});



function CaseDatatable()
{ 

    $('#CaseDatatable').empty().html( '<table  id="main_datatable" class="table table-striped table-bordered"  style="width: 99.5%;"  ></table>' );
    $('#main_datatable').dataTable(
    {       


            // "iDisplayLength":10,
            //"bJQueryUI": true,
            "sAjaxSource": "cases_server_processing.php",  
            "aaSorting": [],

            "aoColumns": 
            [

              { 

                "sTitle": "Action","sWidth": "10%","sClass": "center","bSortable":false,"fnRender": function(obj) 
                { 
     
                          delete_selected_id_array=[];
                          CaseId= obj.aData[ obj.iDataColumn ];
                          idl= obj.aData[obj.iDataColumn];   

                        if(delete_selected_id_array.indexOf(idl) != '-1')
                        {

                         return   "<td><a class='btn btn-danger btn-sm' style='color:white;margin-left:10px;cursor:pointer;' onclick='add_evidences("+CaseId+")' >मुद्देमाल बघा</a></td>";

                        }else
                        {

                          return  "<td><a class='btn btn-danger btn-sm' style='color:white;margin-left:10px;cursor:pointer;' onclick='add_evidences("+CaseId+")' >मुद्देमाल बघा</a></td>";
                        } 
 
                       

                }       
              },


              { 
                "sTitle": "ID", "bVisible":false, "sClass": "left"
              },

              { 
                "sTitle": "बारकोड नंबर", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "क्राइम नंबर", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "मुद्देमालाचा प्रकार", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "मुद्देमालाचे लोकेशन", "bVisible":true, "bSortable":true, "sClass": "left"
              },

              { 
                "sTitle": "मुद्देमाल प्रलंबित राहण्याचे कारण", "bVisible":true, "bSortable":true, "sClass": "left"
              },


              { 
                "sTitle": "Last Updated","sClass": "left", "bSortable":true,"bVisible":false, "bSearchable": true

              }
              
             

            ]
       });
}





  function add_evidences(case_id) {
   
      window.location.href = 'add_evidences.php?id='+case_id;

  }



    </script>

