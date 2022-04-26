<?php
define('DB_SERVER', '127.0.0.1:4307');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'admin');
define('DB_NAME', 'printmanila');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
	die("ERROR: Could not connect " . mysqli_connect_error());
}
date_default_timezone_set('Asia/Manila')
?>