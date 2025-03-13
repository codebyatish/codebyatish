<?php
include('include/db_config.php');
require('include/tcpdf/tcpdf.php');

function getIndianCurrency($number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'One', 2 => 'Two',
        3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
        7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
        10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
        13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
        16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
        19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
        40 => 'Fourty', 50 => 'Fifty', 60 => 'Sixty',
        70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
    $digits = array('', 'Hundred','Thousand','Lakh', 'Crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' & ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    $paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
    return ($Rupees ? $Rupees . 'Rupees Only /-' : '') . $paise;
}


 $reg_success_show_mrno = $_REQUEST['reg_success_show_mrno'];
 $reg_success_appointment_id = $_REQUEST['reg_success_appointment_id'];

 		 $opd_bill_receipt_query =  "SELECT * FROM View_OPD_Appointment WHERE AppointId ='$reg_success_appointment_id'";

		$opd_bill_receipt_result= mysqli_query($con,$opd_bill_receipt_query);
		$opd_bill_receipt_num_rows= mysqli_num_rows($opd_bill_receipt_result); 
		$opd_bill_receipt_row =mysqli_fetch_array($opd_bill_receipt_result,MYSQLI_BOTH);


		$PatientMRNo = $opd_bill_receipt_row['PatientMRNo'];
		$PatientFullName = $opd_bill_receipt_row['PatientFullName'];
		$DoctorFullName = $opd_bill_receipt_row['DoctorFullName'];
		$LastUpdatedFormated = $opd_bill_receipt_row['LastUpdatedFormated'];
		$AppointConsultationFees = $opd_bill_receipt_row['AppointConsultationFees'];
		$AppointDateFormated = $opd_bill_receipt_row['AppointDateFormated'];
		$AppointTimeSlotFormated = $opd_bill_receipt_row['AppointTimeSlotFormated'];	
		

		
		
		$PatientRecommendedBy = $opd_bill_receipt_row['PatientRecommendedBy'];

		$PatientAgeYear = $opd_bill_receipt_row['PatientAgeYear'];
		$PatientAgeMonth = $opd_bill_receipt_row['PatientAgeMonth'];
		$PatientAgeDay = $opd_bill_receipt_row['PatientAgeDay'];
		$PatientAge = $PatientAgeYear.' '.$PatientAgeMonth.' & '.$PatientAgeDay.' ';

		$AppointConsultationFeesInWords = getIndianCurrency($AppointConsultationFees);

		$CurrentDate = date('d-m-Y');
		$CurrentTime = date('h:i A');



// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {


    public function Header() {

		$x = 15;
		$y = 10;
		$w = 20;
		$h = 22;

		// Kpond Logo	
  		$this->Image(K_PATH_IMAGES.'kpond_icon.png', $x, $y, $w, $h, 'PNG', '', '', false, 300, '', false, false, 0, false, false);

  
        $this->SetFont('helvetica', 'B', 17);
        // Title
		$this->setCellPaddings(26, 14, 0, 0);
        $this->Cell(0, 0, "Kpond Children's Superspeciality Hospital", 0, false, 'T', 0, '', 0, false, 'P');

        $this->SetFont('helvetica', '', 10);
        // Address
		$this->setCellPaddings(41, 16, 0, 0);
        $this->MultiCell(0, 0, 'Vaidhehi , Plot No. 12/13 , Deep Nagar , Infront of Adinath Nagar, Garkheda , Aurangabad - 431005 Phone (0240) 2442779, 9405302073', false, 'T', 0, false, 'P');
       

    }

        public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-30);
        // Set font
       	$this->SetFont('helvetica', 'B', 17);
        // Page number
		$html2 = '<hr><table style="font-size: 12px;padding:6px;">

						<tr>
							<td width="110">Giver Name/Sign</td>
							<td width="197">: __________________________</td>
							<td width="130">Receiver Name/Sign</td>
							<td width="197">: __________________________</td>
						</tr>

						<tr>
							<td>Date & Time</td>
							<td>: __________________________</td>
							<td>Date & Time</td>
							<td>: __________________________</td>
						</tr>
					</table>';
		$this->writeHTML($html2,true, 0, true, 0);

		 $this->SetY(-12);

		$this->writeHTML('<b style="font-size: 12px;">Note : Pharmacy does not accept any indents and returns after Pharmacy clearance and bill finalize at hospital</b>',true, 0, true, 0);


    }


}


// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Kpond Hospital');
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
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);


// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

$pdf->AddPage();

$pdf->SetFont('helvetica', 'BI', 10);
$pdf->writeHTML('<br>', true, 0, true, 0);

// RECEIPT Title

$pdf->writeHTML('<span align="right">Printed On : '.$CurrentDate.' '.$CurrentTime.'.</span>', true, 0, true, 0);

$pdf->SetFont('helvetica', '', 9);
$html = '- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ';
$pdf->writeHTML($html, true, 0, true, 0);
$html = <<<EOF
<style>
    p {
        
        font-family: times;
        font-size: 20px;
        font-weight:bold;
        text-align:center;
        color: #078bb9;
         text-transform: uppercase;
    }
</style>

<p>Patient Pharmacy Clearance Form</p>
EOF;
$pdf->writeHTML($html, true, 0, true, 0);
$pdf->SetFont('helvetica', '', 9);
$html = '- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - <br>';
$pdf->writeHTML($html, true, 0, true, 0);


$html = '<table style="font-size: 12px;padding:6px;">
				<tr>
					<td width="110">Patient Name</td>
					<td width="190">: Atishkumar Jaiwal</td>
					<td width="100">Address</td>
					<td width="235">: N-12,ED-22/5,TV center</td>
				</tr>

				<tr>
					<td>Contact No</td>
					<td>: 9823901118</td>
					<td>Gender</td>
					<td>: Male</td>
				</tr>

				<tr>
					<td>Age</td>
					<td>: 20 Years 4 Months & 8 Days</td>
					<td>Bed Type</td>
					<td>: P-ICU A1</td>
				</tr>

				<tr>
					<td>Class</td>
					<td>: General Ward</td>
					<td>Ward</td>
					<td>: General Ward</td>
				</tr>

				<tr>
					<td>Consultant</td>
					<td>: Dr. Vasha Vaidhya</td>
					<td>Refer By</td>
					<td>: Self</td>
				</tr>
			</table>';
$pdf->writeHTML($html, true, true);
$pdf->writeHTML('<hr>', true, true);


$html3 = '<table style="font-size: 12px;padding:6px;">
				<tr>
					<td width="352"></td>
					<td width="155">Amount</td>
					<td width="125">: 5000 /-</td>
				</tr>

				<tr>
					<td></td>
					<td>Clearance Date</td>
					<td>: 16-12-2019</td>
				</tr>

				<tr>
					<td></td>
					<td>Pharmacist Name / Sign</td>
					<td>: Dr. Chetan Jaiwal</td>
				</tr>
				<tr>
					<td></td>
					<td><img src="/examples/images/logo_example.png"  width="50" height="50"></td>
					<td></td>
				</tr>

			</table>';
$pdf->writeHTML($html3, true, true);



// --------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_003.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+


