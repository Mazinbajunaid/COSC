<?php require_once '../app/views/templates/headerPublic.php' ?>
<head>
<link rel= "stylrsheet" type= "text/css" href"/css/style.css">
<head>

<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>You are not logged in! haha</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="/login/index" method="post">
			    <fieldset>
					
            <label><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="UserName">
			<br/>
            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="Password">
			<br/>
            <input type="submit" value="Login">
			
			<input type="checkbox" checked="checked"> Remember
			<div class="container" style="background-color:#f1f1f1">
			
			<span class="user & psw">Forgot <a href="#"> Username or password?</a></span></b>

			<?php 
				if(isset($this.>js))
				{
					echo 1:
				}
			?>		
        </form>

	<body>
	 
</html>
    <?php require_once '../app/views/templates/footer.php' ?>
