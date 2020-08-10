<?php

namespace App\Controllers;

class Discussion extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'FORUM IT | DISCUSSION CHANNEL',
            'active' => 'discussion'
        ];
        return view('konten/discussion', $data);
    }


    //--------------------------------------------------------------------

}
