<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Processing...</title>
</head>

<body>
<?php

$id=$_GET['uniqueid'];
$email=$_GET['email'];


require_once('PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "smtp.ownersellers.com"; // SMTP server
//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "smtp.ownersellers.com"; // sets the SMTP server
$mail->Port       = 25;                    // set the SMTP port for the GMAIL server
$mail->Username   = "info@ownersellers.com"; // SMTP account username
$mail->Password   = "Own12345";        // SMTP account password

$mail->SetFrom('marketing@ownersellers.com', 'Marketing Team-OwnerSellers');

$mail->AddReplyTo("marketing@ownersellers.com","Marketing Team-OwnerSellers");

$mail->Subject    = "OwnerSeller Newsletter Unsubscription Request";

$mail->AddAddress("marketing@ownersellers.com","Marketing Team-OwnerSellers");

$mail->Body    = ' <p style="color:#125a96;" ><strong>OwnerSellers Selling Newletter Unsubscription Request</strong></p>
<p>&nbsp;</p>
<p>Email ID : '.$email.'</p>
<p>Newletter ID : '.$id.'</p>
<p>&nbsp;</p>
<p style="color:#125a96;" ><em>The following Email ID has requested to be Unsubscribed from Buying Newletter.</em></p>
<p>&nbsp;</p>
<p>&nbsp;</p> ';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
 echo 'Could not be Unsubscribed. Please try again';
// echo 'Error: ' . $mail->ErrorInfo;
} else {
  //  echo 'Message has been sent';
  echo '<script type="application/javascript">alert("Unsubscribed from Newsletter");window.location = "http://www.ownersellers.com"; </script>';
}


?>
</body>
</html>
