<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
		helper(['url', 'form']);
	}

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
		return view('front/terms');
	}

	public function privacy()
	{
		return view('front/privacy');
	}
	public function faqs()
	{
		return view('front/faqs');
	}

	function logout()
    {
        if (session()->has('loggedUser')) {
            session()->remove('loggedUser');
            return redirect()->to('/')->with('fail', 'You are logged out');
        } else {
            session()->remove('loggedUser');
            return redirect()->to('/')->with('fail', 'You are logged out');
        }
    }
}
