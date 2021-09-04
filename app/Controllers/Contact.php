<?php

namespace App\Controllers;

class Contact extends BaseController
{
	public function index()
	{
        $data  = [
            'title' => 'Contat | SMA AL-ASIYAH'
        ];

		return view('contact/contact', $data);
		
	
	}
}
