<?php
/**
 * Created by PhpStorm.
 * User: Prasanjeet
 * Date: 6/10/2017
 * Time: 1:54 PM
 */

    include 'credDetail.php';
    ini_set('memory_limit', '-1');
    set_time_limit(100000);


    $newsLetterId=$_GET['newsletterId'];
    echo 'Starttime'.date('Y-m-d h:i:sa');
    /*Get Nl params*/
    $sqlEmail="select * from turner_butler_newsletter where id=".$newsLetterId;
    //echo $sql;

    $newsletterCount=0;
    $resultsEmail = $connection->query($sqlEmail);

    while($rowEmail = $resultsEmail->fetch_assoc()) {
       /* $EmailC = $rowEmail['content'];
       */ $fromEmail=$rowEmail['from_email'];
        $failureEmail=$rowEmail['failure_email'];
        $fromName=$rowEmail['from_name'];
        $NewsLetterName=$rowEmail['name'];

        $newsletterCount++;

    }
        if($newsletterCount>0){


            $sqlEmail = "select * from turner_butler_newsletter_client_test where `status` = '1'";
            echo $sqlEmail;
            $resultsEmail = $connection->query($sqlEmail);
                while ($rowEmail = $resultsEmail->fetch_assoc()) {
                    $EmailC = $rowEmail['content'];
                    $queueid = $rowEmail['id'];
                    $clientEmail = $rowEmail['email_address'];

                    /*Run Mail()*/

                    $headers  = "From: ".$fromName." < ".$fromEmail." >\n";
                    //$headers .= "Cc: testsite < mail@domain.com >\n";
                    $headers .= "X-Sender: ".$fromName." < ".$fromEmail." >\n";
                    $headers .= 'X-Mailer: PHP/' . phpversion();
                    $headers .= "X-Priority: 1\n"; // Urgent message!
                    $headers .= "Return-Path:".$fromEmail."\n"; // Return path for errors
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=iso-8859-1\n";

                   //if( mail($clientEmail,$NewsLetterName,$EmailC,$headers) ) {
                   if( 1 ) {

                        echo $clientEmail.'<br>'.$NewsLetterName.'<br>'.$headers.'<br><br><br>';
                       /*Run update status in queue*/

                       $sqlUpdStat = "UPDATE turner_butler_newsletter_email_queue 
                    set `status`=3 
                    where `id`=" . $queueid . "; ";
                       echo $sqlUpdStat.'========= end ==========';
                       $resultsUpdStat = $connection->query($sqlUpdStat);
                   }

                }







        }

echo 'Endtime'.date('Y-m-d h:i:sa');






