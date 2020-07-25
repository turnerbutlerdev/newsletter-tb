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
$sql = "SELECT  count(1) as cnt FROM `turner_butler_newsletter_email_queue`;";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
          echo "cnt: " . $row["cnt"];
      }
} else {
    echo "0 results";
}
//$connection=mysqli_connect("","mysqladmin","R8ndd2$nr9tj7G","turner_butler_database");


?>                           
