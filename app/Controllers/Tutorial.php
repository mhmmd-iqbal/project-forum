<?php

namespace App\Controllers;

class Tutorial extends BaseController
{

    public function index()
    {
        $data = [
            'judul' => 'FORUM IT | Tutorial',
            'judulkonten' => '<h1>IT <strong>Tutorial</strong></h1>',
            'active' => 'tutorial'
        ];
        return view('konten/tutorial-template', $data);
    }

    public function page($judul = '')
    {
        $data = [
            'judul' => 'FORUM IT | TUTORIAL',
            'judulkonten' => '<h1><strong>' . $judul . '</strong></h1>',
            'active' => 'tutorial'
        ];
        return view('konten/tutorialpage-template', $data);
    }

    //--------------------------------------------------------------------

}
