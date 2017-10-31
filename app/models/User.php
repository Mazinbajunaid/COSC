<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

    public function authenticate() {
        /*
         * if username and password good then
         * $this->auth = true;
         */
		 
		$db = db_connect();
        $statement = $db->prepare("select * from users
                                WHERE name = :name;
                ");
        $statement->bindValue(':name', $this->username);
        $statement->execute();
        $rows = $statement->fetchAll(PDO: :FETCH_ASSOC);
		
		if ($rows) {
			$this->auth = true;
			$_SESSION['name'] = $rows[0]['name'];
			$_SESSION['age'] = $rows[0]['age'];
		}
    }
	
	public function register ($username, $password) 
	{
		$db = db_connect();
		$statement = $db->prepaer("SELECT users  with username =! username)";	
		$statement->bindValue('$username',$username);
		$statement->execute();
		$rows = $statement->fetchAll(PDO: :FETCH_ASSOC);
		
		if($rows)
		{
			$_SESSION['done_register'] = false;
		}
		else 
		{
			$statement= $db->prepare("INSERT INTO users(username, password, email)
               values(:username,:password,:email)");
			   
   $insert->bindParam('username',$name);
   $insert->bindParam('email',$email);
   $insert->bindParam('password',$pass1);
   $insert->execute();

		}
	}
	public function get_amount () 
	{
	$db = db_connect();
        $statement = $db->prepare("select amount from tuition WHERE username = :username; ");
        $statement->bindValue('username', $_SESSION['username']);
        $statement->execute();
        $rows = $statement->fetch(PDO: :FETCH_ASSOC);
		

	}	
}