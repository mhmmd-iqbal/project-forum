<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ModelProfile extends Model
{
    protected $table      = 'tb_profile';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['profile_desc'];
}
