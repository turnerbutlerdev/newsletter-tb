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
$templateC='';
$newsletterC='';
$newsLetterId=$_GET['newsletterId'];
$sqlN="select * from turner_butler_newsletter where id=".$newsLetterId;
//echo $sql;
$resultsN = $connection->query($sqlN);
$type=null;
while($rowN = $resultsN->fetch_assoc()) {
    $newsletterC = $rowN['content'];
    $newsLetterType=$rowN['type_id'];
    $templateId=$rowN['template_id'];

}

$sqlT="select * from turner_butler_template where id=".$templateId;
//echo $sql;


$resultsT = $connection->query($sqlT);
while($rowT = $resultsT->fetch_assoc()) {
    $templateC = $rowT['content'];
}



    $fname = '';
    //$emailAddress = $rowClients['email_address'];


    $emailC = str_replace("____fname", $fname, $templateC);
    $emailC = str_replace("____currentDate", date('D, M j, Y'), $emailC);
    $emailC = str_replace("____content", $newsletterC, $emailC);
    $emailC = str_replace("____nlLink", 'http://newsletter.turnerbutler.co.uk', $emailC);
    $emailC = str_replace("____clientEmail", '#', $emailC);
    //echo $emailC;die;

    echo $emailC;

