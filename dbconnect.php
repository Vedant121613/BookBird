<?php 
define('DB_HOST', 'localhost:3306'); 
define('DB_NAME', 'bookstore'); 
define('DB_USER', 'root'); 
define('DB_PASSWORD', '');  // Default password for root is empty in local setups


$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
?>