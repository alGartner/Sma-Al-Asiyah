<?php

namespace App\Controllers;

class Beranda extends BaseController
{
	public function index()
	{
		$data  = [
            'title' => 'Beranda | SMA AL-ASIYAH'
        ];

		return view('beranda/beranda', $data);
	}
}
