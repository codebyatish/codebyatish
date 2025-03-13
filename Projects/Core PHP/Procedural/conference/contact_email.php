<?php

if(isset($_POST)) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $numb = $_POST['number'];
    $msg = $_POST['msg'];
    
    $message = '<p style="font-weight:bold">Contact form details</p>';
    $message .= '<p><strong>Name</strong> : '. $name . '</p>';
    $message .= '<p><strong>Email</strong> : '. $email . '</p>';
    $message .= '<p><strong>Phone</strong> : '. $numb . '</p>';
    $message .= '<p><strong>Message</strong> : '. $msg . '</p>';
    
    // Always set content-type when sending HTML email
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'To: shaikshazeb<shaikshazeb666@gmail.com>' . "\r\n";
    $headers .= "From: conference <info@samshainfotech.com> \r\n";
    // echo $headers;die;
    
    mail("imcacademies@gmail.com", "Contact Form Mail", $message, $headers);
    
    header('location: index.html');
}