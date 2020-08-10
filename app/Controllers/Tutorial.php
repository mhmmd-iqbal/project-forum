<?php

namespace App\Controllers;

class Tutorial extends BaseController
{

    public function index()
    {
        $data = [
            'judul' => 'FORUM IT | Tutorial',
            'active' => 'tutorial'
        ];
        return view('konten/tutorial', $data);
    }

    public function page($judul = '')
    {
        $data = [
            'judul' => 'FORUM IT | TUTORIAL',
            'active' => 'tutorial'
        ];
        return view('konten/tutorialpage', $data);
    }

    //--------------------------------------------------------------------

}
