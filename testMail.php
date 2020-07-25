<?php 


$hostname = '{turnerbutler.vps.elite.net.uk:143}INBOX';
$username = 'root@turnerbutler.vps.elite.net.uk';
$password = 'Gn843Ltd9$6bD$2387Tr';

/* try to connect */
$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to mailbox: ' . imap_last_error());

echo 'conn';
print_r($inbox);
 ?>
