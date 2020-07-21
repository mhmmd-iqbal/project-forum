<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table      = 'tb_biodata';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'hp', 'email'];
}
