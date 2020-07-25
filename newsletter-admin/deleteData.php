<?php 

/**
 * Created by PhpStorm.
 * User: Prasanjeet
 * Date: 6/10/2017
 * Time: 5:09 AM
 */

$host='185.2.219.137';
$database='turner_butler_database';
$user='mysqladmin';
$pass='turn3r@741_852';

$connection=mysqli_connect($host,$user,$pass,$database);
$sql = "DELETE FROM `turner_butler_newsletter_email_queue`";

if (mysqli_query($connection, $sql)) {
    echo "DELETE successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
