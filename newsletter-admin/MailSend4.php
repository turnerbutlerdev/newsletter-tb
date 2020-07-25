<?php
/**
 * Created by PhpStorm.
 * User: Prasanjeet
 * Date: 6/10/2017
 * Time: 1:54 PM
 */
error_reporting(E_ALL); ini_set('display_errors', 1);
    include 'credDetail.php';
    ini_set('memory_limit', '-1');
    set_time_limit(100000);
    // $newsLetterId=$_GET['newsletterId'];
    $limit=1000;
    $qid='Q4';
    echo 'Starttime'.date('Y-m-d h:i:sa');
    /*Get Nl params*/
$newsLetterId = '';

$fromEmail='';
$failureEmail='';
$fromName='';
$NewsLetterName='';


            /*Set Queue*/
            $sqlEmail="UPDATE turner_butler_newsletter_email_queue 
            set `status`=2 , `queue` = '".$qid."' 
            where `status`=1 order by `id` ASC LIMIT ".$limit." ; ";
            echo $sqlEmail.'<br>';
            $resultsEmail = $connection->query($sqlEmail);
            //$resultsEmail=false; // delete before live
            if($resultsEmail) {

            $sqlEmail = "select * from turner_butler_newsletter_email_queue where `queue` = '".$qid."'  and `status`=2 ";
            echo $sqlEmail;
            $resultsEmail = $connection->query($sqlEmail);
                while ($rowEmail = $resultsEmail->fetch_assoc()) {
                    $EmailC = $rowEmail['content'];
                    $queueid = $rowEmail['id'];
                    $clientEmail = $rowEmail['email_address'];
                    $newsLetterId = $rowEmail['newsletter_id'];

                    $fromEmail='';
                    $failureEmail='';
                    $fromName='';
                    $NewsLetterName='';

                    $sqlEmail1="select * from turner_butler_newsletter where id=".$newsLetterId;
                    $resultsEmail1 = $connection->query($sqlEmail1);
                    while($rowEmail1 = $resultsEmail1->fetch_assoc()) {
                        /* $EmailC = $rowEmail['content'];
                        */ $fromEmail=$rowEmail1['from_email'];
                        $failureEmail=$rowEmail1['failure_email'];
                        $fromName=$rowEmail1['from_name'];
                        $NewsLetterName=$rowEmail1['name'];
                    }

                    /*Run Mail()*/

                    $headers  = "From: ".$fromName." < ".$fromEmail." >\n";
                    //$headers .= "Cc: testsite < mail@domain.com >\n";
                    $headers .= "X-Sender: ".$fromName." < ".$fromEmail." >\n";
                    $headers .= 'X-Mailer: PHP/' . phpversion();
                    $headers .= "X-Priority: 1\n"; // Urgent message!
                    $headers .= "Return-Path:".$fromEmail."\n"; // Return path for errors
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=iso-8859-1\n";

                    $send_mail=mail($clientEmail,$NewsLetterName,$EmailC,$headers) ;

                    echo 'SEND_MAIL>>>>'.$send_mail;
                       if($send_mail ) {
                           echo '<<<<<SEND SUCCCCCC>>>>>';
                       //if( 1 ) {

                            echo $clientEmail.'<br>'.$NewsLetterName.'<br>'.$headers.'<br><br><br>';
                           /*Run update status in queue*/

                           $sqlUpdStat = "UPDATE turner_butler_newsletter_email_queue 
                        set `status`=3 
                        where `id`=" . $queueid . "; ";
                           echo $sqlUpdStat.'========= end ==========';
                           $resultsUpdStat = $connection->query($sqlUpdStat);
                       }
                       else {
                           echo '<<<<<NOT SEND SUCCCCCC>>>>>';
                           print_r(error_get_last());
                       }

                }



            }




if($newsLetterId==''){
    $newsLetterId='-- NA --';
}

if($NewsLetterName==''){
    $NewsLetterName='-- NA --';
}


echo 'Endtime'.date('Y-m-d h:i:sa');
$sql="INSERT INTO `turner_butler_cron` (`name`) VALUES ('Cron for ".$qid." Mail Sending Process Newsletter ID : ".$newsLetterId." , Newsletter Name : ".$NewsLetterName."')";

$resultsUpdCron = $connection->query($sql);





