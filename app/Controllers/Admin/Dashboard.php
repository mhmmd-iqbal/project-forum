<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Admin | Dashboard'
        ];
        return view('admin/home', $data);
    }

    //--------------------------------------------------------------------

}
