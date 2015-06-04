<?php 

$Name = "Da Duder"; //senders name 
$email = "rolignu90@gmail.com"; //senders e-mail adress 
$recipient = "rmarroquin@lieison.com"; //recipient 
$mail_body = "The text for the mail..."; //mail body 
$subject = "Subject for reviever"; //subject 
$header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields 



mail($recipient, $subject, $mail_body, $header); //mail command :) 


?>