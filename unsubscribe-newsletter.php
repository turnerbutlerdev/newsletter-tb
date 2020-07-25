<center><img src="processing.gif"> </center>
<?php
/**
 * Created by PhpStorm.
 * User: Prasanjeet
 * Date: 6/10/2017
 * Time: 3:25 AM
 */


//phpinfo();

//$connection=mysqli_connect("185.2.219.137","mysqladmin","R8ndd2$nr9tj7G","turner_butler_database");
$connection=mysqli_connect("185.2.219.137","mysqladmin","turn3r@741_852","turner_butler_database");
$email=$_GET['email'];
$code2=$_GET['cond2'];
$txt='';
$txt.='<br><strong>[CHECKED] </strong> - Please do not send me any further newsletters';

if($code2=='checked')
{
    $txt.='<br><strong>[CHECKED] </strong> - Please do not use my personal data to contact me by email with details of businesses that you have for sale.';
}
if(empty($email) || $email==' ' || strlen($email)<6)
{
    die;
}
$sql="UPDATE `turner_butler_newsletter_client_main` set `status`=0 where `email_address` like '%".$email."%' LIMIT 5 ; ";

//echo $sql; die;

$result = mysqli_query($connection, $sql);

$fromName='	Turner Butler Marketing';
$fromEmail='marketing@turnerbutler.co.uk';
$NewsLetterName='Request for Unsubscription';
$clientEmail='prasanjeet.chakraborty@gmail.com,reeta.verma@turnerbutler.co.uk,shalini@bppinfotech.com';


$headers  = "From: ".$fromName." < ".$fromEmail." >\n";
$headers .= "X-Sender: ".$fromName." < ".$fromEmail." >\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= "X-Priority: 1\n"; // Urgent message!
$headers .= "Return-Path:".$fromEmail."\n"; // Return path for errors
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1\n";

$EmailC=$_GET['email'].' has requested to be unsubscribed<br><br>'.$txt;

$send_mail=mail($clientEmail,$NewsLetterName,$EmailC,$headers) ;

if($result){

        echo ' <script> alert("Email Address has been unsubscribed succesfully. "); window.location = "http://newsletter.turnerbutler.co.uk "; </script>';


}
else{
    echo ' <script> alert("Email Address could not be unsubscribed.Please mail us at marketing@turnerbutler.co.uk if you are facing issues in unsubscribing your email address."); window.location = "http://newsletter.turnerbutler.co.uk "; </script>';

}
