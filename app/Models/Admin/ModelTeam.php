<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ModelTeam extends Model
{
    protected $table      = 'tb_team';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'name',
        'position',
        'photo'
    ];
}
