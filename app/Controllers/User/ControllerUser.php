<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class ControllerUser extends BaseController
{
    function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function dashboard()
    {
        $data = [
            'judul' => 'Tutor | Dashboard',
            'username' => $this->session->username,
        ];
        return view('user/home', $data);
    }

    //--------------------------------------------------------------------

}
