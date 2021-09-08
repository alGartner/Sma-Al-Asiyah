<?php

namespace App\Controllers;
use App\Models\ArtikelModel;
use CodeIgniter\Controller;

class Beranda extends BaseController
{
	public function index()
	{
		$artikelModel = new ArtikelModel();

		$data  = [
            'title' => 'Beranda | SMA AL-ASIYAH',
			'artikels' => $artikelModel->orderBy('id_artikel', 'ASC')->findAll()
        ];

		// $db = \Config\Database::connect();
		// $komik = $db->query("SELECT * FROM artikel");

		// dd($komik);

		return view('beranda/beranda', $data);
	}
}
