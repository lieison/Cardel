<?php

/***
 * 
 *@version 1.0
 *@author Rolando Arriaza 
 *@todo Enviar Cv mediante un correo 
 * 
 */

require_once 'include/phpmailer/class.phpmailer.php';

$from       = "rmarroquin@lieison.com";

$names      = $_POST['txt_name'] . " " . $_POST['txt_name'] ? : null;
$phone      = $_REQUEST['txt_phone'];
$file       = $_FILES['file'];

$extension  = explode(".", $file['name']);
$extension  = end($extension);

print_r($extension);
return;


$mailer     = new PHPMailer();


$mailer->From   = $from;
$mailer->FromName = "Cardel Oportunidades " . $names;
$mailer->AddAddress($from, "Cardel Support" );
$mailer->addAttachment("" , "");   