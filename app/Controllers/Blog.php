<?php

namespace App\Controllers;

class Blog extends BaseController
{

    public function index()
    {
        $data = [
            'judul' => 'FORUM IT | BLOG',
            'active' => 'blog'
        ];
        return view('konten/blog', $data);
    }

    public function page($judul = '')
    {
        $data = [
            'judul' => 'FORUM IT | BLOG',
            'active' => 'blog',
        ];
        return view('konten/blogpage', $data);
    }

    //--------------------------------------------------------------------

}
