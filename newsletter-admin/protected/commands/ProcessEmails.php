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


    $newsLetterId='3';
    $limit=10;
    $qid='Q1';

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
            /*Set Queue*/
            $sqlEmail="UPDATE turner_butler_newsletter_email_queue 
            set `status`=2 , `queue` = '".$qid."' 
            where `newsletter_id`=".$newsLetterId." and `status`=1 order by `id` ASC LIMIT ".$limit." ; ";
            //echo $sql;
            $resultsEmail = $connection->query($sqlEmail);
            if($resultsEmail) {

            $sqlEmail = "select * from turner_butler_newsletter_email_queue where `queue` = 'Q1'  and `status`=2 and newsletter_id=" . $newsLetterId;
            //echo $sql;
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

                        echo $clientEmail.'<br>'.$NewsLetterName.'<br>'.$EmailC.'<br>'.$headers.'<br><br><br>';
                       /*Run update status in queue*/

                       $sqlUpdStat = "UPDATE turner_butler_newsletter_email_queue 
                    set `status`=3 ,
                    where `id`=" . $queueid . "; ";
                       //echo $sql;
                       $resultsUpdStat = $connection->query($sqlUpdStat);
                   }

                }



            }



        }






