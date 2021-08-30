<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		// return view('login');
	
	}
    public function login(){
        return view('login/login');
    }
}
