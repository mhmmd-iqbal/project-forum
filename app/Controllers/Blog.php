<?php

namespace App\Controllers;

class Blog extends BaseController
{

    public function index()
    {
        $data = [
            'judul' => 'FORUM IT | BLOG',
            'judulkonten' => '<h1><strong>Blog</strong></h1>',
            'active' => 'blog'
        ];
        return view('konten/blog-template', $data);
    }

    public function page($judul = '')
    {
        $data = [
            'judul' => 'FORUM IT | BLOG',
            'judulkonten' => '<h1><strong>' . $judul . '</strong></h1>',
            'active' => 'blog',
        ];
        return view('konten/blogpage-template', $data);
    }

    //--------------------------------------------------------------------

}
