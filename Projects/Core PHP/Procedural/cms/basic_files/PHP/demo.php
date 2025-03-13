<?php 









$apiKey = urlencode("3330556467686174616e3131321595659048");
// Message details
$numbers = urlencode("919823901118");
$sender = urlencode("EXHIBI");
$message = rawurlencode("This is your message");
$route = urlencode("2");
 
// Prepare data for POST request
$data = "authentic-key=" . $apiKey . "&number=" . $numbers . "&senderid=" . $sender ."&route=" . $route . "&message=" . $message;
// Send the GET request with cURL
$ch = curl_init("http://88.99.209.80/http-tokenkeyapi.php?" . $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// Process your response here
echo $response;

?>