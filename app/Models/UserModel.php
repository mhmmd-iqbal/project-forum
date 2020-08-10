<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'tb_user';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'level',
        'username',
        'email',
        'pass',
        'name',
        'job',
        'gender',
        'birth_date',
        'phone',
        'address',
        'status'
    ];

    public function checkUser($username, $email)
    {
        $builder = $this->table('tb_usere');
        $builder->select(['username', 'email', 'pass', 'level']);
        $builder->where('username', $username);
        $builder->where('email', $email);

        return $builder;
    }
}
