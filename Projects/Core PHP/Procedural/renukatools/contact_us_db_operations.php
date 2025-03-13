<?php
		
	$task = $_REQUEST['task'];

        $contact_name = htmlspecialchars($_REQUEST["contact_name"]);
        $contact_organization = htmlspecialchars($_REQUEST["contact_organization"]);
        $contact_designation = htmlspecialchars($_REQUEST["contact_designation"]);
        $contact_email_id = htmlspecialchars($_REQUEST["contact_email_id"]);
        $contact_mobile_number = htmlspecialchars($_REQUEST["contact_mobile_number"]);
        $contact_city = htmlspecialchars($_REQUEST["contact_city"]);
        $contact_state = htmlspecialchars($_REQUEST["contact_state"]);
        $contact_country = htmlspecialchars($_REQUEST["contact_country"]);
        $contact_address = htmlspecialchars($_REQUEST["contact_address"]);
        $contact_enquiry = htmlspecialchars($_REQUEST["contact_enquiry"]);
        $TodaysDate = date('d-m-Y');


if ($task == "send_contact_us_email") 
{	

		$fromEmail = "info@renukatools.in";

		$r_to = "anandmulay@renukatools.in";
		$r_subject = "Enquiry from Website".$contact_name."-".$contact_organization."-"$TodaysDate;
		$r_headers = "MIME-Version: 1.0" . "\r\n";
		$r_headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$r_headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
		$r_message = '<!doctype html>
						<html lang="en">
						<head>
							<meta charset="UTF-8">
							<meta name="viewport"
								  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
							<meta http-equiv="X-UA-Compatible" content="ie=edge">
							<title>Document</title>
						</head>
						<body>
						<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">
						</span>
							<div class="container">
								<b>Name : </b>'.$contact_name.'<br>
								<b>Organization : </b>'.$contact_organization.'<br>
								<b>Email ID : </b>'.$contact_email_id.'<br>
								<b>Mobile Number : </b>'.$contact_mobile_number.'<br>
								<b>City : </b>'.$contact_city.'<br>
								<b>State : </b>'.$contact_state.'<br>
								<b>Country : </b>'.$contact_country.'<br>
								<b>Address : </b>'.$contact_address.'<br>
								<b>Enquiry : </b>'.$contact_enquiry.'<br>
							</div>
					</body>
					</html>';


			if (@mail($r_to, $r_subject, $r_message, $r_headers)) {

					$c_to = $contact_email_id;
					$c_subject = "We thank You for your business enquiry (from www.renukatools.in)";
					$c_headers = "MIME-Version: 1.0" . "\r\n";
					$c_headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					$c_headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
					$c_message = '<!doctype html>
									<html lang="en">
									<head>
										<meta charset="UTF-8">
										<meta name="viewport"
											  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
										<meta http-equiv="X-UA-Compatible" content="ie=edge">
										<title>Document</title>
									</head>
									<body>
									<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">
									</span>
										<div class="container">
											<p> Dear Valued Customer., </p> <br>
											<p> Thank you for contacting Customer Service at wwww.renukatools.in </p>
											<p> Your Email has been received and one of our Sales and Applications Engineers will respond to you within 24 business hours from the time we receive your enquiry. If you need immediate assistance, please contact our sales department as per following geographical territories :
											</p>

											<br>

											<b><u>For Gujarat Territory</u></b> 
											<p>Mr. Nilesh Surani </p> 
											<p>7755981164</p> 
											<p>sales_guj@renukatools.in</p>  

											<b><u>For Rest of India</u></b> 
											<p>Mr. Kiran Attarde</p> 
											<p>9922438439</p> 
											<p>sales@renukatools.in</p>  

											<b><u>For Outside India (Overseas Sales)</u></b> 
											<p>exports@renukatools.in </p> 

											<b><u>For Government Organization</u></b> 
											<p>govsales@renukatools.in</p>  


											<br>
											<br>
											<br>
											<br>

											<p> Warm regards, </p>
											<p> Support  </p>
											<b> Renuka Tools </b>
											<p> Aurangabad, Maharashtra, India.  </p>
											<p> Info@renukatools.in  </p>
											<p> www.renukatools.in  </p>
											<p> +91 9423118885/86 </p>
											<p> +91 240 2553301 </p>
										</div>
								</body>
								</html>';

								if (@mail($c_to, $c_subject, $c_message, $c_headers)) {

										echo "Success";

								}else{

										echo "Fail_C";
								}

			}else{

				echo "Fail_R";
			}




}
		

?>