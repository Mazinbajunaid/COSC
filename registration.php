<?php

try {
   $conn = new PDO('mysql:127.0.0.1;=$servername;dbname=COSC', 'root', '');
   if(isset($_POST['save'])){
   $name=$_POST['username'];
   $email=$_POST['email'];
   $pass1=$_POST['password'];
   $hash=password_hash($pass1,PASSWORD_DEFAULT);
   //$pass=md5($pass);// hash password for security
   $insert=$conn->prepare("INSERT INTO users(username, password, email)
               values(:username,:password,:email)");
   $insert->bindParam('username',$name);
   $insert->bindParam('email',$email);
   $insert->bindParam('password',$pass1);
   $insert->execute();
   header("location:index.php");

   }

   }
catch(PDOException $e)
   {
   echo $sql . "<br>" . $e->getMessage();
   }
   $conn = null;
?>
<html>
<body>
<h1>
    <title>singup</title>
    </head>
    <body>
       
		<form id="login" name="login" action="registration.php" method="post" 
			name="registration" method="post" action="registration.php">
			<body id="body-color"> <div id="Sign-Up"> 
			<fieldset style="width:30%"><legend>Registration Form</legend>
			<table border="0"> <tr> <form method="POST" action="connectivity-sign-up.php"> 
			<td>Name</td><td> <input type="text" name="name"></td> </tr> <tr> <td>Email</td><td>
			<input type="text" name="email"></td> </tr> <tr> <td>UserName</td><td> 
			<input type="text" name="user"></td> </tr> <tr> <td>Password</td><td> 
			<input type="password" name="pass"></td> </tr> <tr> <td>Confirm Password </td><td>
			<input type="password" name="cpass"></td> </tr> <tr> <td>
			<input id="button" type="submit" name="submit" value="Sign-Up"></td> </tr>
			</form>
			</table>
			</fieldset>
			</div>
			
  

        </form>

	<body>
	 
</html>
