<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    protected $AdminLogin = TRUE;
    protected $session;
    function __construct()
    {
        $this->session = \Config\Services::session();
        if (($this->session->level != 1) || ($this->session->level == null)) {
            $this->AdminLogin = FALSE;
        }
    }

    public function index()
    {
        if ($this->AdminLogin == FALSE) {
            return redirect()->to('/');
        }
        $data = [
            'judul' => 'Admin | Dashboard',
            'username' => $this->session->username,
        ];
        return view('admin/home', $data);
    }

    //--------------------------------------------------------------------

}
