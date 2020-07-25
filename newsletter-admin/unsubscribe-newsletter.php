<center><img src="processing.gif"> </center>
<?php
/**
 * Created by PhpStorm.
 * User: Prasanjeet
 * Date: 6/10/2017
 * Time: 3:25 AM
 */


//phpinfo();

$connection=mysqli_connect("185.2.219.137","root","pass_prasan@123","turner_butler_database");

$sql="UPDATE `turner_butler_newsletter_client_main` set `status`=0 where `email_address` like '".$_POST['email']."'; ";
$result = mysqli_query($connection, $sql);
if($result){

        echo ' <script> alert("Email Address has been unsubscribed succesfully. "); window.location = "http://newsletter.turnerbutler.co.uk "; </script>';


}
else{
    echo ' <script> alert("Email Address could not be unsubscribed.Please mail us at marketing@turnerbutler.co.uk if you are facing issues in unsubscribing your email address."); window.location = "http://newsletter.turnerbutler.co.uk "; </script>';

}