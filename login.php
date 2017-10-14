<?php

	session_start();
	// array and loginInfo && password 
	$LoginInfo = array('Maz' , 'mazin' , 'Naz');
	$passInfo = array ('123' , '456' , '789');
	
	if (!isset($_SESSION['failed']))
	{
		$_SESSION['failed']=0;
	
	}	
	
		if (in_array($_POST['UserName'], $LoginInfo))
		{
			$key = array_search($_POST['UserName'], $LoginInfo);
			if ($_POST['Password'] == $passInfo[$key])
			{
				$_SESSION['LOIN'] = $_POST['username'];
				$_SESSION['paIN'] = $_POST['password'];
				$_SESSION['TheyAreTheSame'] = true;
				header("location:NewWelcome.php");	
			}
			else
			{
				echo "Username or password are invaild";
			}
		}
		else
		{
			echo "Username or password are invaild";
		}
	
		if(isset($_POST['failedAttempts']))
		{
		echo "number of invalid info attempts ".$_SESSION['failed'];
		}
		
?>
