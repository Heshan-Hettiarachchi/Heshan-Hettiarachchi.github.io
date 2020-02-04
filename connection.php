<?php 

date_default_timezone_set("Asia/Colombo");
    define("DB_SERVER", "sql210.epizy.com");
define("DB_USER", "epiz_25154079");
define("DB_PASSWORD", "123456");
define("DB_DATABASE", "epiz_25154079_bookstoredb");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
   if(!$conn)
    {
	die('Could not connect:'.mysqli_connect_error());
    }  
    
?>