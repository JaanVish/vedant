<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('front/index');
	}

	public function home()
	{
		return view('front/index');
	}

	public function contact()
	{
		return view('front/contact');
	}

	public function games()
	{
		return view('front/games');
	}

	public function challenges()
	{
		return view('front/challenges');
	}

	public function terms()
	{
		return view('front/terms-and-condition');
	}

	public function privacy()
	{
		return view('front/privacy-policy');
	}
}
