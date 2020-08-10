<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ControllerAdmin extends BaseController
{
    function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function dashboard()
    {
        $data = [
            'judul' => 'Admin | Dashboard',
            'username' => $this->session->username,
        ];
        return view('admin/home', $data);
    }

    public function admin()
    {
        $data = [
            'judul' => 'Admin | Data Admin',
            'username' => $this->session->username,
        ];
        return view('admin/admin', $data);
    }
    public function user()
    {
        $data = [
            'judul' => 'Admin | Data User',
            'username' => $this->session->username,
        ];
        return view('admin/user', $data);
    }
    //--------------------------------------------------------------------

}
