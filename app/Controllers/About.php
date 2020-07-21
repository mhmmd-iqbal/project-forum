<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'FORUM IT | About',
            'judulkonten' => '<h1>About <strong>Us</strong></h1>',
            'active' => 'about'
        ];
        return view('konten/about-template', $data);
    }


    //--------------------------------------------------------------------

}
