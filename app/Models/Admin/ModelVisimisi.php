<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ModelVisimisi extends Model
{
    protected $table      = 'tb_visimisi';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['mision_desc', 'vision_desc'];
}
