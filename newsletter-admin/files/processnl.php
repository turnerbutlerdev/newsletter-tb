<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<link rel="shortcut icon" type="image/png" href="favicon.png"/>
<link rel="shortcut icon" type="image/png" href="https://www.ownersellers.com//favicon.png"/>
<link href="apple-touch-icon.png" rel="apple-touch-icon" />
<link href="apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
<link href="apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
<link href="apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />
<link href="apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />
<link href="icon-hires.png" rel="icon" sizes="192x192" />
<link href="icon-normal.png" rel="icon" sizes="128x128" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Processing..</title>
<!--Start of Zopim Live Chat Script-->

<!--End of Zopim Live Chat Script--><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65728385-1', 'auto');
  ga('send', 'pageview');

</script></head>

<body>



<?php
$connection=mysqli_connect("UK1MYSQL2482.eechost.net","sql164621","Q5xikq7r","sql164621");
//echo $_POST['0'];
if($_POST['0']=='1')
{
$sql="INSERT INTO `sql164621`.`news_clients` (`news_email`, `news_fname`, `news_lname`, `news_group`, `news_act`, `news_sector`, `news_agr`, `news_service`, `news_ecomm`, `news_res`, `news_fran`, `news_hotel`, `news_manu`, `news_trans`, `news_retail`, `news_golf`) VALUES ('".$_POST['email']."', '".$_POST['fname']."', '".$_POST['lname']."', 'MAIN_DB', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
";}
else
{

$sql="INSERT INTO `sql164621`.`news_clients` (`news_email`, `news_fname`, `news_lname`, `news_group`, `news_act`, `news_sector`, `news_agr`, `news_service`, `news_ecomm`, `news_res`, `news_fran`, `news_hotel`, `news_manu`, `news_trans`, `news_retail`, `news_golf`) VALUES ('".$_POST['email']."', '".$_POST['fname']."', '".$_POST['lname']."', 'MAIN_DB', '1', '0', '".$_POST['1']."', '".$_POST['2']."', '".$_POST['3']."', '".$_POST['4']."', '".$_POST['5']."', '".$_POST['6']."', '".$_POST['7']."', '".$_POST['8']."', '0', '0');
";
}
//echo $sql;
$result = mysqli_query($connection, $sql);
if($result)
{

 echo '<script type="application/javascript">alert("You have successfully registered for our Newsletter");window.location = "business-alerts.php"; </script>';
}
else
{
 echo '<script type="application/javascript">alert("Your Subscription could not be processed.");window.location = "business-alerts.php"; </script>';   
}
  


?>
</body>
</html>
