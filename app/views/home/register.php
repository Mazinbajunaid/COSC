<?php require_once '../app/views/templates/headerPublic.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Please create an account</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="/login/register" method="post">
			    <fieldset>
					<div class="form-group">
					 <body>
       
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
			

</html>
    <?php require_once '../app/views/templates/footer.php' ?>
