 <?php
  session_start();
  include('include/db_config.php');
  error_reporting(0);

    $task = $_REQUEST['task'];
    $last_updated=date('Y-m-d H:i:s');




if ($task == 'get_appointment_type_details') 
{

    $select_date = $_REQUEST['select_date'];
    $filter_select_year = $_REQUEST['filter_select_year'];



    $select_start_date = date('Y-m-d', strtotime($select_date));

    $arr =explode('-', $select_start_date);
    $y = $arr[0];
    $m = $arr[1];
    $d = $arr[2];

    $LastDayofMonth = date('t',strtotime($select_start_date));

    $select_end_date = $y.'-'.$m.'-'.$LastDayofMonth;


    if ($select_date != "") {
     
      $qry_get_register ="SELECT `CategoryOfCrime`, `CaseDisposed`, `EvidenceLastUpdatedFormated`, COUNT(case when CaseDisposed = 1 then EvidenceId else NULL end) as CaseDisposedCount, COUNT(case when CaseDisposed = 0 then EvidenceId else NULL end) as CaseNonDisposedCount , COUNT(EvidenceId) as TotalCount from View_EMS_Evidences WHERE CaseIssueDate BETWEEN '$select_start_date' AND '$select_end_date' group by CategoryOfCrime";

    }else{

      $qry_get_register ="SELECT `CategoryOfCrime`, `CaseDisposed`, `EvidenceLastUpdatedFormated`, COUNT(case when CaseDisposed = 1 then EvidenceId else NULL end) as CaseDisposedCount, COUNT(case when CaseDisposed = 0 then EvidenceId else NULL end) as CaseNonDisposedCount , COUNT(EvidenceId) as TotalCount from View_EMS_Evidences group by CategoryOfCrime";

    }

  
    $qry_rows_get_register=mysqli_query($con,$qry_get_register);
    $num_rows = mysqli_num_rows($qry_rows_get_register);
    $table_data = ' <table id="goshwara_details_datatable" class="table table-striped table-bordered dataTable" style="width: 99.5%;">
                        <thead>
                          <tr>
                            <th class="left">गुन्ह्याची श्रेणी</th>
                            <th class="left">एकूण निर्गत झालेले मुद्देमाल</th>
                            <th class="left">एकूण निर्गत न झालेले मुद्देमाल</th>
                            <th class="left">एकूण मुद्देमाल</th>
                            <th class="left">Last Updated</th>
                          </tr>
                        </thead>
                        <tbody id="visiting_patient_details">
                        ';
    while ($qry_results_get_register=mysqli_fetch_array($qry_rows_get_register,MYSQLI_BOTH)) 
    {

        
        if ($num_rows != 0) 
        {

                $CaseDisposedCount = $qry_results_get_register["CaseDisposedCount"];
                if($CaseDisposedCount == '' || $CaseDisposedCount == null)
                {
                  $CaseDisposedCount = 0;
                }

                $CaseNonDisposedCount = $qry_results_get_register["CaseNonDisposedCount"];
                if($CaseNonDisposedCount == '' || $CaseNonDisposedCount == null)
                {
                  $CaseNonDisposedCount = 0;
                }

                $TotalCount = $qry_results_get_register["TotalCount"];
                if($TotalCount == '' || $TotalCount == null)
                {
                  $TotalCount = 0;
                }


                

                $CategoryOfCrime  = $qry_results_get_register['CategoryOfCrime'];
                $CaseDisposed  = $qry_results_get_register['CaseDisposed'];
                $EvidenceLastUpdatedFormated  = $qry_results_get_register['EvidenceLastUpdatedFormated'];

                $table_data .= '<tr>
                                  <td class="td_th_border">'.$CategoryOfCrime.'</td>
                                  <td class="td_th_border">'.$CaseDisposedCount.'</td>
                                  <td class="td_th_border">'.$CaseNonDisposedCount.'</td>
                                  <td class="td_th_border">'.$TotalCount.'</td>
                                  <td class="td_th_border">'.$EvidenceLastUpdatedFormated.'</td>
                                </tr>';

            
                }

    } 

    $table_data .= '</tbody></table>';





    // ------------------------------------------




  if ($filter_select_year != "") {
     
      $sel_qry ="SELECT `CategoryOfCrime`, `CaseDisposed`, `EvidenceLastUpdatedFormated`, COUNT(case when CaseDisposed = 1 then EvidenceId else NULL end) as CaseDisposedCount1, COUNT(case when CaseDisposed = 0 then EvidenceId else NULL end) as CaseNonDisposedCount1 , COUNT(EvidenceId) as TotalCount1 from View_EMS_Evidences WHERE CaseIssueYear = '$filter_select_year' group by CategoryOfCrime";

    }else{

      $sel_qry ="SELECT `CategoryOfCrime`, `CaseDisposed`, `EvidenceLastUpdatedFormated`, COUNT(case when CaseDisposed = 1 then EvidenceId else NULL end) as CaseDisposedCount1, COUNT(case when CaseDisposed = 0 then EvidenceId else NULL end) as CaseNonDisposedCount1 , COUNT(EvidenceId) as TotalCount1 from View_EMS_Evidences group by CategoryOfCrime";

    }




    $sel_qry_result = mysqli_query($con,$sel_qry);
    $sel_qry_num_rows = mysqli_num_rows($sel_qry_result);
    $table_data1 = ' <table id="goshwara_details_datatable_for_year" class="table table-striped table-bordered dataTable" style="width: 99.5%;">
                        <thead>
                          <tr>
                            <th class="left">गुन्ह्याची श्रेणी</th>
                            <th class="left">एकूण निर्गत झालेले मुद्देमाल</th>
                            <th class="left">एकूण निर्गत न झालेले मुद्देमाल</th>
                            <th class="left">एकूण मुद्देमाल</th>
                            <th class="left">Last Updated</th>
                          </tr>
                        </thead>
                        <tbody id="visiting_patient_details">
                        ';
    while ($sel_qry_result_rows = mysqli_fetch_array($sel_qry_result,MYSQLI_BOTH)) 
    {

        
        if ($sel_qry_num_rows != 0) 
        {

                $CaseDisposedCount1 = $sel_qry_result_rows["CaseDisposedCount1"];
                if($CaseDisposedCount1 == '' || $CaseDisposedCount1 == null)
                {
                  $CaseDisposedCount1 = 0;
                }

                $CaseNonDisposedCount1 = $sel_qry_result_rows["CaseNonDisposedCount1"];
                if($CaseNonDisposedCount1 == '' || $CaseNonDisposedCount1 == null)
                {
                  $CaseNonDisposedCount1 = 0;
                }

                $TotalCount1 = $sel_qry_result_rows["TotalCount1"];
                if($TotalCount1 == '' || $TotalCount1 == null)
                {
                  $TotalCount1 = 0;
                }


                $CategoryOfCrime1  = $sel_qry_result_rows['CategoryOfCrime'];
                $CaseDisposed1  = $sel_qry_result_rows['CaseDisposed'];
                $EvidenceLastUpdatedFormated1  = $sel_qry_result_rows['EvidenceLastUpdatedFormated'];

                $table_data1 .= '<tr>
                                  <td class="td_th_border">'.$CategoryOfCrime1.'</td>
                                  <td class="td_th_border">'.$CaseDisposedCount1.'</td>
                                  <td class="td_th_border">'.$CaseNonDisposedCount1.'</td>
                                  <td class="td_th_border">'.$TotalCount1.'</td>
                                  <td class="td_th_border">'.$EvidenceLastUpdatedFormated1.'</td>
                                </tr>';

            
                }

    } 

    echo $table_data."~".$table_data1 .= '</tbody></table>';

}





   
 ?>