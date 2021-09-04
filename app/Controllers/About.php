<?php

namespace App\Controllers;

class About extends BaseController
{
	public function index()
	{
        $data  = [
            'title' => 'About | SMA AL-ASIYAH'
        ];

		return view('about/about', $data);
		
	
	}
}
