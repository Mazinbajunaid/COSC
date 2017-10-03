<?php
session_start();
if(session_destroy())
	{
		header("Location: index.php");
		
		$date = date("d/m/Y");
		$time = date("H:iA");
		
		echo "You logged out on the $date at $time";


		
	}	
		die();
	
		
?>