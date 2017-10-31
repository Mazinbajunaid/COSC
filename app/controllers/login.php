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
		
		
			if (isset($_Post['username']))
			{
				$user->username = $_POST['username'];
			}
		
			if (isset($_Post['password']))
			{
			
				$user->password = $_POST ['password'];
			}

        $user->authenticate();

        if ($user->auth == TRUE) {
            $_SESSION['auth'] = true;
        }
        else 
		{
			$_SESSION['countAttampts'] != 1;
		array_push($_SESSION['login_attempt'], array($_POST['username'],$_POST ['password']));
		{
        header('Location: /home');
    }
	
	public function register () {
		$user = $this->model('User');
		 
		// Processing form data when form is submitted
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if (isset($_SESSION['done_register']) && $_SESSION['done_register'] == false) {
				echo "user name is alredy used.";
				session_unset($_SESSION['done_register']);
		} 
		else if
			{
				if (isset($_SESSION['password_Okay']) && $_SESSION['password_Okay'] == false) {
				echo "password must contain at least one capital letter ";
				session_unset($_SESSION['password_Okay']);
		} 
		else
			{
			$usename= $_POST['usename'];
			$password= $_POST['password'];
			$_SESSION['password_Okay'] = true;
			
			if (strlen($password) < 1)
			{
					$_SESSION ['password_Okay'] = false;
				
			}
			$pass_array = str_split($password);
			$number = false;
			$upercase = false;
			$lowercase = false;
			$symbol = false;
			
			foreach($paaword_array as $value);
				if(is_numeric($value)
				{
					$number = true;
				}
				elseif (ctype_lower($value))
				{
					$lowercase = true;
				}
				elseif (ctype_upper($value))
				{
					$uppercase = true;
				}
				elseif (ctype_punct($value))
				{
					$symbol = true;
				}		
			}
				
			if (!($number && $lowercase && $upercase && $s ymbol))
			{
				$_SESSION ['password_Okay'] = false;
			}
			if($_SESSION ['password_Okay'])
			{
				$password = password_hash($_POST['password'], PASSWORD_DEFAULT $_POST['password']);
				$user-> register($username, $password);
				
				if($_SESSION['done_register'])
				{
					$_SESSION ['auth'] = true;
				
				
				
				
				
	/*	
		if(isset($_POST['save'])){
   $name=$_POST['username'];
   $email=$_POST['email'];
   $pass1=$_POST['password'];
   $hash=password_hash($pass1,PASSWORD_DEFAULT);
		}
		*/
		$this->view('home/register');
	}
}
