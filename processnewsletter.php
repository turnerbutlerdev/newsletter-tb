<center><img src="processing.gif"> </center>
<?php
/**
 * Created by PhpStorm.
 * User: Prasanjeet
 * Date: 6/10/2017
 * Time: 3:25 AM
 */


//phpinfo();

//$connection=mysqli_connect("185.2.219.137","root","pass_prasan@123","turner_butler_database");
$emailF=str_replace(' ','',$_POST['email']);
$connection=mysqli_connect("185.2.219.137","mysqladmin","turn3r@741_852","turner_butler_database");
$sql111="SELECT * from `turner_butler_newsletter_client_main` where `email_address` like '".$emailF."'";
//echo '------'.$emailF.'------'; //die;
//echo $sql111;die;
$result111 = $connection->query($sql111);
$status11=0;
while($row111= $result111->fetch_assoc())
{
    $status11++;
}

if(isset($_POST['0']) && $_POST['0']==1 && $status11==0){
    $sql="INSERT INTO `turner_butler_newsletter_client_main` (`first_name`, `last_name`, `email_address`, `newsletter_type_id`) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$emailF."', '1')";
    $result = mysqli_query($connection, $sql);
}
else{
    if(isset($_POST['11']) && $_POST['11']==1 && $status11==0){
        $sql="INSERT INTO `turner_butler_newsletter_client_main` (`first_name`, `last_name`, `email_address`, `newsletter_type_id`) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$emailF."', '2')";
        $result = mysqli_query($connection, $sql);
    }
    if(isset($_POST['22']) && $_POST['22']==1 && $status11==0){
        $sql="INSERT INTO `turner_butler_newsletter_client_main` (`first_name`, `last_name`, `email_address`, `newsletter_type_id`) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$emailF."', '3')";
        $result = mysqli_query($connection, $sql);
    }
    if(isset($_POST['33']) && $_POST['33']==1 && $status11==0){
        $sql="INSERT INTO `turner_butler_newsletter_client_main` (`first_name`, `last_name`, `email_address`, `newsletter_type_id`) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$emailF."', '4')";
        $result = mysqli_query($connection, $sql);
    }
    if(isset($_POST['44']) && $_POST['44']==1 && $status11==0){
        $sql="INSERT INTO `turner_butler_newsletter_client_main` (`first_name`, `last_name`, `email_address`, `newsletter_type_id`) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$emailF."', '5')";
        $result = mysqli_query($connection, $sql);
    }
    if(isset($_POST['55']) && $_POST['55']==1 && $status11==0){
        $sql="INSERT INTO `turner_butler_newsletter_client_main` (`first_name`, `last_name`, `email_address`, `newsletter_type_id`) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$emailF."', '6')";
        $result = mysqli_query($connection, $sql);
    }
    if(isset($_POST['66']) && $_POST['66']==1 && $status11==0){
        $sql="INSERT INTO `turner_butler_newsletter_client_main` (`first_name`, `last_name`, `email_address`, `newsletter_type_id`) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$emailF."', '7')";
        $result = mysqli_query($connection, $sql);
    }
    if(isset($_POST['77']) && $_POST['77']==1 && $status11==0){
        $sql="INSERT INTO `turner_butler_newsletter_client_main` (`first_name`, `last_name`, `email_address`, `newsletter_type_id`) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$emailF."', '8')";
        $result = mysqli_query($connection, $sql);
    }
    if(isset($_POST['88']) && $_POST['88']==1 && $status11==0){
        $sql="INSERT INTO `turner_butler_newsletter_client_main` (`first_name`, `last_name`, `email_address`, `newsletter_type_id`) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$emailF."', '9')";
        $result = mysqli_query($connection, $sql);
    }
}

if($result){

    echo ' <script> alert("Your Subscription request has been recorded successfully. "); window.location = "http://newsletter.turnerbutler.co.uk "; </script>';


}
else{
    $sql11="SELECT * from `turner_butler_newsletter_client_main` where `email_address` like '".$emailF."'";
    $result11 = $connection->query($sql11);
    $status1=0;
    while($row11= $result11->fetch_assoc())
    {
        $status1++;
    }

    $sql1="SELECT * from `turner_butler_newsletter_client_main` where `email_address` like '".$emailF."' and status like '1'";
    $result1 = $connection->query($sql1);
    $status=0;
    while($row1= $result1->fetch_assoc())
    {
        $status++;
    }

    $sql12="SELECT * from `turner_butler_newsletter_client_main` where `email_address` like '".$emailF."' and status like '0'";
    $result12 = $connection->query($sql12);
    $status12=0;
    while($row12= $result12->fetch_assoc())
    {
        $status12++;
    }


    if($status1>0){
        if($status>0){
            //already there
            echo ' <script> alert("Email Address used for subscription already exists. "); window.location = "http://newsletter.turnerbutler.co.uk "; </script>';
        }
        else if($status1>0){
            // already unsubs
            echo ' <script> alert("Email Address used for subscription had been deleted previously.If you want to again subscribe to our newsletters please mail us at marketing@turnerbutler.co.uk"); window.location = "http://newsletter.turnerbutler.co.uk "; </script>';
        }
        else{
            echo ' <script> alert("1Techincal Error occured in subscribing Email Address.Please contact our support on marketing@turnerbutler.co.uk"); window.location = "http://newsletter.turnerbutler.co.uk "; </script>';
            // technical error

        }

    }
    else{
        //technical error
        echo ' <script> alert("2Techincal Error occured in subscribing Email Address.Please contact our support on marketing@turnerbutler.co.uk"); window.location = "http://newsletter.turnerbutler.co.uk "; </script>';

    }




}



//echo $sql; die();


