<?php

namespace App\Models;

use CodeIgniter\Model;

class PhotoModel extends Model
{
    protected $table      = 'tb_photo';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['photo'];
}
