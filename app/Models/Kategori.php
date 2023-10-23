<?php

namespace App\Models;

use CodeIgniter\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $allowedFields = ['nama_kategori', 'timestamp'];
}
