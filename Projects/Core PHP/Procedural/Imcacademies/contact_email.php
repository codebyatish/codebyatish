<?php

if(isset($_POST)) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $msg = $_POST['msg'];
    
    $message = '<p style="font-weight:bold">Contact form details</p>';
    $message .= '<p><strong>Name</strong> : '. $name . '</p>';
    $message .= '<p><strong>Email</strong> : '. $email . '</p>';
    $message .= '<p><strong>Message</strong> : '. $msg . '</p>';
    
    // Always set content-type when sending HTML email
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'To: shaikshazeb<shaikshazeb666@gmail.com>' . "\r\n";
    $headers .= "From: imcacademies <info@samshainfotech.com> \r\n";
    // echo $headers;die;
    
    mail("shaikshazeb666@gmail.com", "Contact Form Mail", $message, $headers);
    
    header('location: index.html');
}