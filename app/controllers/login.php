<?php

class Login extends Controller {
    public function index() {
        $user = $this->model('User');

        if (in_array($_POST['UserName'], $LoginInfo))
		{
			$key = array_search($_POST['UserName'], $LoginInfo);
			if ($_POST['Password'] == $passInfo[$key])
			{
				$_SESSION['LOIN'] = $_POST['username'];
				$_SESSION['paIN'] = $_POST['password'];
			}
		
		
			else
			{
				echo "Username or password are invaild";
			}
		
		else
		{
			echo "Username or password are invaild";
		}

        $user->authenticate();

        if ($user->auth == TRUE) {
            $_SESSION['auth'] = true;
        }
        
        header('Location: /home');
    }
	
	public function register () {
		$user = $this->model('User');
		
		if(isset($_POST['save'])){
   $name=$_POST['username'];
   $email=$_POST['email'];
   $pass1=$_POST['password'];
   $hash=password_hash($pass1,PASSWORD_DEFAULT);
		}
		
		$this->view('home/register');
	}
}
