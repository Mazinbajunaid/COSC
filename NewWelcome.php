<?php
SESSION_start();
if(!isset($_SESSION['TheyAreTheSame'])){
	header("location:index.php");
}
		$date = date("d/m/Y");
		$time = date("H:iA");			
		echo "welcome to web {$_POST['UserName']} {$date} at {$time}";

?>

<form method="post" action="logout.php">
<br> <input type="submit" value="Logout"/>
</form>


