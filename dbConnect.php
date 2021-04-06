<?php

define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_SERVER', 'localhost');
define('DB_NAME', 'enterprise');

//connection

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if ($conn) {
	//echo "connected successfully to the database";
	# code...
}else{
	echo "failed to connect".mysqli_connect_error();
}




?>