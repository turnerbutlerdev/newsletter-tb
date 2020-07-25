<?php
/**
 * Created by PhpStorm.
 * User: Prasanjeet
 * Date: 6/10/2017
 * Time: 3:25 AM
 */


/*phpinfo();
die;*/
/*$sql="INSERT INTO `turner_butler_newsletter` (`type_id`, `template_id`, `from_email`, `failure_email`, `hour`, `min`, `day`, `month`, `year`, `from_name`, `content`, `name`) VALUES ('999', '9', 'asd', 'asda', '12', '1', '2', '11', '2018', 'xzcvxcxcxcvv', 'asdas', 'adsasd')";
$sql="INSERT INTO `turner_butler_newsletter_client_main` (`first_name`, `last_name`, `email_address`, `newsletter_type_id`) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['email']."', '2')";*/


//echo $sql; die();
$fromName="Turner Butler ";
$fromEmail="research@turnerbutler.co.uk";
$headers  = "From: ".$fromName." < ".$fromEmail." >\n";
//$headers .= "Cc: testsite < mail@domain.com >\n";
$headers .= "X-Sender: ".$fromName." < ".$fromEmail." >\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= "X-Priority: 1\n"; // Urgent message!
$headers .= "Return-Path:".$fromEmail."\n"; // Return path for errors
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1\n";

$body='
<html><head><title>Oppurtunity on 13.06.2017</title></head><body>
<p>Hello Prasanjeet</p></body></html>

';
$send_mail=mail('prasanjeet@tagrem.com','Oppurtunity on 13.06.2017',$body,$headers,"-f ".$fromEmail) ;

if($send_mail){
    echo 'yes';
}
else{
    echo 'no';
}
//die();

    $connection=mysqli_connect("185.2.219.137","mysqladmin","turn3r@741_852","turner_butler_database");

        if($connection){
            echo 'yes';
        }
        else{

            die("Connection failed: " . $conn->connect_error);
        }
    //$result = mysqli_query($connection, $sql);
