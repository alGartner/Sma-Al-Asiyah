<?php

namespace App\Controllers;

class Beranda extends BaseController
{
	public function index()
	{
		$data  = [
            'title' => 'Beranda | SMA AL-ASIYAH'
        ];

		$db = \Config\Database::connect();
		$komik = $db->query("SELECT * FROM artikel");

		dd($komik);

		return view('beranda/beranda', $data);
	}
}
