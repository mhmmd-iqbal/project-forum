<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table      = 'tb_user';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id_level',
        'username',
        'pass',
        'name',
        'job',
        'gender',
        'birth_date',
        'birth_datephone',
        'address',
        'status',
    ];
}
