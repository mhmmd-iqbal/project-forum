<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'judul' => 'FORUM IT | HOME',
			'active' => 'home'
		];
		return view('konten/home', $data);
	}


	//--------------------------------------------------------------------

}
