<?php 
require_once('https://quizzical-ride-f5a5f7.netlify.com/connection.php');
date_default_timezone_set("Asia/Colombo");
if(isset($_POST["Username"]) && isset($_POST["password"]))
{
echo 'Uname and PW received';

    $un = $_POST["Username"];
    $pw = $_POST["password"];
    
    
    if($un != null && $pw != null)
    {
	    session_start();
	    $_SESSION['StoreUn'] = $un;
            $query = mysqli_query($conn, "select * from users where username='$un' && password=aes_encrypt('$pw', '$un')");
            $rowcount=0;
            while($row = mysqli_fetch_array($query))
            {
                $rowcount++;   
            }
            if($rowcount == 1)
            {

		if(isset($_SESSION['StoreUn']))
		{
		session_start();
		echo 'Session:'.$_SESSION['StoreUn'];
		session_start();
                header("Location:https://quizzical-ride-f5a5f7.netlify.com/home.php");
		}
		else
		{
			echo 'Error!!!!111';
		}
            }
	    else if($rowcount == 0)
            {
		$query = mysqli_query($conn, "INSERT INTO `users`(`username`, `password`) VALUES ('$un', aes_encrypt('$pw', '$un'))");
        	if($query==1)
        	{
			
            		header("Location:https://quizzical-ride-f5a5f7.netlify.com/home.php");
        	}
                else
                {
                     echo 'Error!!!!';
                }
            }        
    }
    else
    {
	echo "Invalid Data error!!!";
    }
mysqli_close($conn);
}
else
{
echo 'Error!!!';
}
?>