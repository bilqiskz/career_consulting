<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'BK SMKN 1 Cimahi'
		];
		return view('landing-page/index', $data);
	}
	//--------------------------------------------------------------------

}
