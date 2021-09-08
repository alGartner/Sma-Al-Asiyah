<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id_artikel';
    protected $allowedFields =['id_artikel', 'judul_artikel', 'isi_artikel', 'gambar', 'user_add', 'waktu_entri', 'user_last', 'waktu_edit', 'penghapus', 'waktu_hapus'];

}