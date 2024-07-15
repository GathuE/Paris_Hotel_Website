<?php

error_reporting(0);

//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phonenumber'];
$topic= $_POST['subject'];
$message= $_POST['message'];
$to = "//Recipient Email Goes Here";
$subject = "Website Enquiries";
$txt ="NAME = ". $name . "\r\nEMAIL = " . $email . "\r\nPHONE = " . $phone . "\r\nSUBJECT = " . $topic . "\r\nMessage = " . $message;
//$headers = "From: www.parishotel.co.ke";
if($email!=NULL){
    mail($to,$subject,$txt);
}
//redirect
header("Location:success_message");
?>