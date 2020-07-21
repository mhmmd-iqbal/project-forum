<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'judul' => 'FORUM IT | HOME',
			'judulkonten' => '<h1>The <strong>Hub</strong> Of <strong>Tutorials</strong></h1>',
			'active' => 'home'
		];
		return view('konten/template', $data);
	}


	//--------------------------------------------------------------------

}
