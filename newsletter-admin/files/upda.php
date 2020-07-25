<?php
/**
 * Created by PhpStorm.
 * User: Prasanjeet
 * Date: 6/10/2017
 * Time: 3:25 AM
 */


$sql="INSERT INTO `turner_butler_newsletter` (`type_id`, `template_id`, `from_email`, `failure_email`, `hour`, `min`, `day`, `month`, `year`, `from_name`, `content`, `name`) VALUES ('999', '9', 'asd', 'asda', '12', '1', '2', '11', '2018', 'xzcvxcxcxcvv', 'asdas', 'adsasd')";

//echo $sql; die();
$connection=mysqli_connect("185.2.219.137","root","pass_prasan@123","turner_butler_database");
    $result = mysqli_query($connection, $sql);
if($result)
    echo 'succ';