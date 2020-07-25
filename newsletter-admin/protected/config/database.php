<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database

	'connectionString' => 'mysql:host=185.2.219.137;dbname=turner_butler_database',
	'emulatePrepare' => true,
'username' => 'mysqladmin',
    'password' => 'turn3r@741_852',
//	'username' => 'tb_nl_admin',
//	'password' => 'turn3r@741_852',
	'charset' => 'utf8',

);
