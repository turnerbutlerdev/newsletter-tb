<?php 

//echo 'aa'; die;
//$connection=mysqli_connect("185.2.219.137","root","pass_prasan@123","turner_butler_database");
$connection=mysqli_connect("185.2.219.137","mysqladmin","turn3r@741_852","turner_butler_database");
$sql="INSERT INTO `turner_butler_newsletter_client_main` (`first_name`, `last_name`, `email_address`, `newsletter_type_id`) VALUES ('ojppphp', 'werwrwwr', 'asdasdadas', '1')";
    $result = mysqli_query($connection, $sql);


?>
