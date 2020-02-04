<?php 
require_once('https://quizzical-ride-f5a5f7.netlify.com/connection.php');
date_default_timezone_set("Asia/Colombo");
if(isset($_POST["AuthorName"]) && isset($_POST["country"]))
	{
    	$an = $_POST["AuthorName"];
    	$c = $_POST["country"];
    	if($an != null && $c != null)
    	{
        
        	$query = mysqli_query($conn, "insert into authors(name, country) values('$an', '$c')");
        	if($query>0)
        	{
        		echo 'Successfully inserted author to database!!!';
        	}
        	mysqli_close($conn);        
    	}
    	else
    	{
        	mysqli_close($conn);
        	echo "Invalid author details";
    	}    
	}
	else
	{

        	echo "Invalid author details";
	}

?>