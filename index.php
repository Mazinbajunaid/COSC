<?php

session_start();
if (isset($_POST['submit'])){
	{  
		// array and loginInfo && password 
		$LoginInfo = array('Maz' , 'mazin' , 'Naz');
		$passInfo = array ('123' , '456' , '789');
		$max = sizeof($LoginInfo);
		$logged = false; 
		for($i=0;$i<$max;$i++)
		{
					
					
			if($_POST['UserName']==$LoginInfo[$i])
			{
				echo "You have logged in";
				
			 $logged = true;
			}
		}
		if( $logged == false )
			{
				echo "wrong username or password!";
			}		
				
			// welcome page 
			if(!session_is_registered('UserName'))
				{
						header("location:login.php")
						$date = date("d/m/Y");
						$time = date("H:iA");
						echo "welcome to web $_SESSION ['UserName'] $date at $time";
				}
				
				
			// count number of try
			if (isset($_SESSION['loginCount']))
			{
				$_SESSION['loginCount']++;
				
				if ($_SESSION['loginCount'] > 3)
					{
				
				echo 'try!';
				
				exit;
					}
			}
					
					else 
					{
						
						$_SESSION['loginCount'] = 1;
					}
					// Set session variable authenticated 
					if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] == 'true')	
					{
						
						header('Location: login.php');
					}

				//logout authenticated to false
				if(session_destroy(($_SESSION["authenticated"]) == 'false')
					{
					header("Location: index.php");
		
					$date = date("d/m/Y");
					$time = date("H:iA");
		
					echo "You logged out on the $date at $time";


		
					}	
				die();
	
})
	
	
	
		
?>

<html>
<body>
<h1>MazCOSC

First step of creating website

    <title>Login</title>
    </head>
    <body>
       
        <form name="login" action="" method="post">
		
            <label><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="UserName" value="" required><br />
            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="Password" required><br />
            
			<button type="submit" name="submit" value= "submit">Login</button>
			<button type="submit" name="submit" value= "submit">attempts</button>
			
			
			<input type="checkbox" checked="checked"> Remember
			
			<div class="container" style="background-color:#f1f1f1">
   
    <span class="user & psw">Forgot <a href="#"> Username or password?</a></span>


			
        </form>
    </body>
</html>
