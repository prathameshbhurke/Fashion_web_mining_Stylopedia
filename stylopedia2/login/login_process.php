<?php
//session_start();
//echo "dasd"; exit;
include('config1.php');
$user = $_POST["user_name"];

	$password=$_POST["password"];
	$sql = "SELECT * FROM login WHERE BINARY(user) = BINARY('$user')"; 
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$database_password = $row['pass'];
	
	
	if(isset($database_password))
	{
		
   			if($database_password==$password)
   			{
     				
				$_SESSION['Name']=$user;
				//echo "Hello"; exit;
	 			header( "Location: full-width.html" );
   			}
   			else
   			{
    				$_SESSION['err']="The password you entered is incorrect.";
				echo"incorrect pass"; exit;
				//header( "Location: userlogin.php" );
   			}
		
	}
	else
	{
		$_SESSION['err']="The username you entered is not in database. ";
		echo"lolla"; exit;
		header( "Location: userlogin.php" );
	}

