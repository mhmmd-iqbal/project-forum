<?php

namespace App\Controllers;

class Ebook extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'FORUM IT | E BOOK',
            'active' => 'ebook'
        ];
        return view('konten/ebook', $data);
    }


    //--------------------------------------------------------------------

}
