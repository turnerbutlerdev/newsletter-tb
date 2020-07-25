<?php
/**
 * Created by PhpStorm.
 * User: Prasanjeet
 * Date: 6/10/2017
 * Time: 4:51 AM
 */

include 'credDetail.php';
ini_set('memory_limit', '-1');
set_time_limit(100000);

$templateId=$argv[1];
$newsLetterId=$argv[2];


$sqlT="select * from turner_butler_template where id=".$templateId;
//echo $sql;
$templateC='';
$newsletterC='';

$resultsT = $connection->query($sqlT);
while($rowT = $resultsT->fetch_assoc()) {
    $templateC = $rowT['content'];
}

$sqlN="select * from turner_butler_newsletter where id=".$newsLetterId;
//echo $sql;
$resultsN = $connection->query($sqlN);
$type=null;
while($rowN = $resultsN->fetch_assoc()) {
    $newsletterC = $rowN['content'];
    $newsLetterType=$rowN['type_id'];
}

//echo $templateC.'<br><br>';

//echo $newsletterC.'<br><br>';
//die;

$sqlClients="select * from turner_butler_newsletter_client_main where status=1 and newsletter_type_id=".$newsLetterType;
//echo $sql;
$resultsClients = $connection->query($sqlClients);
$startTime=date('d-m-Y h:i:sa');
echo 'Start Time : '.$startTime.'============================================<br><br>';$c=0;
while($rowClients = $resultsClients->fetch_assoc()) {



    $fname = $rowClients['first_name'];
    $emailAddress = $rowClients['email_address'];


    $emailC = str_replace("____fname", $fname, $templateC);
    $emailC = str_replace("____currentDate", date('D, M j, Y'), $emailC);
    $emailC = str_replace("____content", $newsletterC, $emailC);
    $emailC = str_replace("____nlLink", 'http://newsletter.turnerbutler.co.uk/newsletter-admin/newsletter-preview?newsletterId='.$newsLetterId, $emailC);
    $emailC = str_replace("____clientEmail", $emailAddress, $emailC);
    //echo $emailC;die;

    $sqlQueueUpdate="INSERT INTO `turner_butler_newsletter_email_queue` (`content`, `newsletter_id`, `email_address`) VALUES ('".$emailC."', '$newsLetterId', '".$emailAddress."')";
    $resultsQueueUpdate = $connection->query($sqlQueueUpdate);
    if ($resultsQueueUpdate)
    {
            echo 'Email Queue id : '.$c.' updated properly,Client Address : '.$emailAddress.'<br><br>';
    }

    else
    {
        echo("Error description: " . mysqli_error($connection));
    }
    $c++;

}

$endTime = date('d-m-Y h:i:sa');
echo '<br><br>End Time : ' . $endTime . '============================================<br><br>';

