<?php
include('include/db_config.php');
require('include/tcpdf/tcpdf.php');

  $TestId = $_REQUEST['id'];
  $sel_qry ="SELECT * FROM CRM_Test WHERE TestId = '$TestId'";
  $sel_qry_result = mysqli_query($con,$sel_qry);
  $sel_qry_result_qry_row = mysqli_fetch_array($sel_qry_result,MYSQLI_BOTH);

      $EmployeeId = $sel_qry_result_qry_row['EmployeeId'];
      $ClientId = $sel_qry_result_qry_row['ClientId'];
      $ClientName = $sel_qry_result_qry_row['ClientName'];
      $TestName = $sel_qry_result_qry_row['TestName'];
      $Area = $sel_qry_result_qry_row['Area'];
      $AHUNumber = $sel_qry_result_qry_row['AHUNumber'];
      $WitnessedByName1 = $sel_qry_result_qry_row['WitnessedByName1'];
      $WitnessedByName2 = $sel_qry_result_qry_row['WitnessedByName2'];

      
      $CurrentDate = date('d-m-Y');
      $CurrentTime = date('h:i A');


      $date_of_nursing_chart1 = str_replace('/', '-', $_REQUEST['date']);
      $date_of_nursing_chart = date('Y-m-d', strtotime($date_of_nursing_chart1));



      $sel_qry1 ="SELECT * FROM CRM_Employee WHERE EmployeeId = '$EmployeeId'";
      $sel_qry_result1 = mysqli_query($con,$sel_qry1);
      $sel_qry_result_row1 = mysqli_fetch_array($sel_qry_result1,MYSQLI_BOTH);

      $EmployeeId = $sel_qry_result_row1['EmployeeId'];

      $EmployeeFirstName = $sel_qry_result_row1['EmployeeFirstName'];
      $EmployeeLastName = $sel_qry_result_row1['EmployeeLastName'];
      $EmployeeFullName = $EmployeeFirstName." ".$EmployeeLastName;



      $date_of_nursing_chart1 = str_replace('/', '-', $_REQUEST['date']);
      $date_of_nursing_chart_f = date('d-m-Y', strtotime($date_of_nursing_chart1));



// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {


    public function Header() 
    {

          $this->setCellPaddings(37, 0, 0, 0);

    }

}


// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);




// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Air Velocity - Emcure Template');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data

$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));



// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins


// set margins
$pdf->SetMargins('11', PDF_MARGIN_TOP, '11');
$pdf->SetHeaderMargin(37);
$pdf->SetFooterMargin(43);


/*$pdf->SetMargins('5', 30, '5');*/
/*$pdf->SetHeaderMargin(5);*/


// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

$pdf->SetFont('times', 'BI', 12);
$pdf->AddPage();



// RECEIPT Title
$pdf->writeHTML('<span align="right">Printed On : '.$CurrentDate.' '.$CurrentTime.'.</span>', true, 0, true, 0);

$pdf->SetFont('helvetica', '', 9);
$html = '- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -';
$pdf->writeHTML($html, true, 0, true, 0);
$html = <<<EOF
<style>
    p {
        
        font-family: times;
        font-size: 20px;
        font-weight:bold;
        text-align:center;
        color: #2e6da4;
    }
</style>

<p>Air Velocity - Emcure Template</p>
EOF;


$pdf->writeHTML($html, true, 0, true, 0);
$pdf->SetFont('helvetica', '', 9);

$html = '- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br>';

$pdf->writeHTML($html, true, 0, true, 0);



// Table 
$pdf->SetFont('helvetica', '', 12);

$html_tbl ='<table style="font-size: 12px;padding:4px;">
              		<tr>
              		  <td width="150" style="font-weight:bold;" >CLIENT</td>
              		  <td width="515" > &nbsp; : &nbsp;'.$ClientName.'</td>
              		 </tr>
              		<tr>
              		  <td style="font-weight:bold;">TEST CARRIED OUT BY</td>
              		  <td> &nbsp; : &nbsp; '.$EmployeeFullName.'</td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">TEST</td>
                    <td> &nbsp; : &nbsp; Air Velocity - Emcure Template</td>
                   </tr>
                  <tr>
                    <td style="font-weight:bold;">AREA</td>
                    <td> &nbsp; : &nbsp; '.$Area.'</td>
                  </tr>
                  <tr>
                    <td style="font-weight:bold;">AHU NO.</td>
                    <td> &nbsp; : &nbsp; '.$AHUNumber.'</td>
                   </tr>
                  <tr>
                    <td style="font-weight:bold;">DATE</td>
                    <td> &nbsp; : &nbsp; '.$CurrentDate.'</td>
                  </tr>
		        </table>';

$pdf->writeHTML($html_tbl, true, true);



$html_tbl2 = '<table border="1" style="font-size: 10px;padding:4px;text-align:center;">
                         <thead> 
                            <tr style="background-color:lightgrey;font-weight:bold;">
                              <th rowspan="3" >Room Name</th>
                              <th rowspan="3" >Filter Code</th>
                              <th colspan="5">Velocity Reading - FPM</th>
                              <th rowspan="3" >Avg.</th>
                              <th rowspan="3" >Room Vol. Ft3</th>
                              <th rowspan="3" >Filter Size Ft2.</th>
                              <th rowspan="3" >CFM</th>
                              <th rowspan="3" >A/C  Per Hr.</th>
                             </tr>   
                            <tr style="background-color:lightgrey;font-weight:bold;">
                              <th>1</th>
                              <th>2</th>
                              <th>3</th>
                              <th>4</th>
                              <th>5</th>
                            </tr>
                          </thead><tbody>';

                                $sel_qry2 ="SELECT * FROM CRM_AVEmcureTemplate WHERE TestId = '$TestId'";
                                $sel_qry_result2 = mysqli_query($con,$sel_qry2);
                                $sel_qry_result_num_row2 = mysqli_num_rows($sel_qry_result2);


                                  if ($sel_qry_result_num_row2 != 0) 
                                  {

                                    while($sel_qry_details_row2 = mysqli_fetch_array($sel_qry_result2,MYSQLI_BOTH)) 
                                    {
                                          $AVEmcureId = $sel_qry_details_row2['AVEmcureId'];
                                          $TestId = $sel_qry_details_row2['TestId'];
                                          $AVEmcureRoomName = $sel_qry_details_row2['AVEmcureRoomName'];
                                          $AVEmcureFilterCode = $sel_qry_details_row2['AVEmcureFilterCode'];
                                          $AVEmcureVelocityReading1FPM = $sel_qry_details_row2['AVEmcureVelocityReading1FPM'];
                                          $AVEmcureVelocityReading2FPM = $sel_qry_details_row2['AVEmcureVelocityReading2FPM'];
                                          $AVEmcureVelocityReading3FPM = $sel_qry_details_row2['AVEmcureVelocityReading3FPM'];
                                          $AVEmcureVelocityReading4FPM = $sel_qry_details_row2['AVEmcureVelocityReading4FPM'];
                                          $AVEmcureVelocityReading5FPM = $sel_qry_details_row2['AVEmcureVelocityReading5FPM'];
                                          $AVEmcureAvg = $sel_qry_details_row2['AVEmcureAvg'];
                                          $AVEmcureRoomVol3FT = $sel_qry_details_row2['AVEmcureRoomVol3FT'];
                                          $AVEmcureFilterSize2FT = $sel_qry_details_row2['AVEmcureFilterSize2FT'];
                                          $AVEmcureCFM = $sel_qry_details_row2['AVEmcureCFM'];
                                          $AVEmcureACPH = $sel_qry_details_row2['AVEmcureACPH'];
                                     
                                    
                                        $html_tbl2 .= '<tr>
                                                        <td>'.$AVEmcureRoomName.'</td>
                                                        <td>'.$AVEmcureFilterCode.'</td>
                                                        <td>'.$AVEmcureVelocityReading1FPM.'</td>
                                                        <td>'.$AVEmcureVelocityReading2FPM.'</td>
                                                        <td>'.$AVEmcureVelocityReading3FPM.'</td>
                                                        <td>'.$AVEmcureVelocityReading4FPM.'</td>
                                                        <td>'.$AVEmcureVelocityReading5FPM.'</td>
                                                        <td>'.$AVEmcureAvg.'</td>
                                                        <td>'.$AVEmcureRoomVol3FT.'</td>
                                                        <td>'.$AVEmcureFilterSize2FT.'</td>
                                                        <td>'.$AVEmcureCFM.'</td>
                                                        <td>'.$AVEmcureACPH.'</td>
                                                      </tr>';

                                }
                            }
                $html_tbl2 .='</tbody></table>';


$pdf->writeHTML($html_tbl2, true, true);



$html_tbl3 ='<table border="1" style="font-size: 10px;padding:4px;">
                        <thead>
                            <tr style="background-color:lightgrey;font-weight:bold;text-align:center;">
                              <th colspan="2">AIR CHANGES PER HOUR SHALL NOT BE LESS THAN 50 ACPH</th>
                            </tr>    
                        </thead>
                                                  
                          <tr style="text-align:center;">
                            <td style="height:100px;" ></td>
                            <td></td>
                          </tr>
                          <tr style="text-align:center;">
                            <td>For, '.$WitnessedByName1.'.</td>
                            <td>For, '.$WitnessedByName2.'.</td>
                          </tr>
                </table>';

$pdf->writeHTML($html_tbl3, true, true);



//Close and output PDF document
$pdf->Output('example_003.pdf', 'I');




