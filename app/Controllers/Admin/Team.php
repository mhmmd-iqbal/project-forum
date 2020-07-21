<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class Team extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        helper('form');
        $data = [
            'judul' => 'Admin | Team Member'
        ];
        return view('admin/team', $data);
    }
}
