
<?php


$task = $_REQUEST['task'];
	

if ($task == "send_download_pdf_to_email") 
{	

	$data = json_decode($_REQUEST['id']);
	$customer_email_id = $_REQUEST['customer_email_id'];
	$fromEmail = "info@renukatools.in";


		//$down_array = explode(",", $id);
		//print_r($down_array); 
		$to = $customer_email_id;
		$subject = "Download link from Renuka Tools - Download Centre (www.renukatools.in)";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
		$message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Download link from Renuka Tools </title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">

			</span>
				<div class="container">
				<p>Dear Sir / Madam,</p>
				<p>At the outset, we’d like to thank you for requesting your download from www.renukatools.in.</p>
				<p>We are glad that you showed interest in our products / services.</p>
				<p>Kindly find below the links to your requested downloads.</p> <br>';
		         
					for ($i=0; $i < sizeof($data); $i++) { 

						 $message .= "<b>".($i+1).". ".$data[$i]->name."</b> :- ".$data[$i]->link."<br>";

					}
 
		   $message .='<br><p>In case of any further doubts / clarifications / requests, kindly contact us on info@renukatools.in.</p>
		   					<br>
		   					<br>
		   				<p>Warm regards, 
		   				<p>Support  </p>
		   				<b>Renuka Tools  </b>
		   				<p>Aurangabad,  Maharashtra,  India.</p>
		   				<p>Info@renukatools.in</p>
		   				<p>www.renukatools.in</p>
		   				<p>+91 9423118885/86</p>
		   				<p>+91 240 2553301</p>

				</div>
			</body>
			</html>';


			if (@mail($to, $subject, $message, $headers)) {

					$r_to = "anandmulay@renukatools.in";
					$r_subject = "New Download Request From Website";
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
											<p>Email :- '.$customer_email_id.'</p>
										</div>
								</body>
								</html>';

								if (@mail($r_to, $r_subject, $r_message, $r_headers)) {

										echo "Success";

								}else{

										echo "Fail_C";
								}


			}else{

				echo "Fails";
			}



}
		










?>