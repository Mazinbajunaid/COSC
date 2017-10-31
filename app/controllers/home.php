<?php

class Home extends Controller {

    public function index($name = '') {		
        $user = $this->model('User');

		$total= $user->get_amount();
		
		
        $this->view('home/index', [
		'message' => 'Welcome to home page'
		'total' => $total;
		]);
    }

    public function login($name = '') {
        $this->view('home/login');
    }

}
