<?php

namespace App\Controllers;

class Discussion extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'FORUM IT | DISCUSSION CHANNEL',
            'judulkonten' => '<h1>Disscusion <strong>Channel</strong></h1>',
            'active' => 'discussion'
        ];
    }


    //--------------------------------------------------------------------

}
