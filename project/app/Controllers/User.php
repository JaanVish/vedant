<?php

namespace App\Controllers;
use App\Models\GamesModel;
use CodeIgniter\Model;

class User extends BaseController
{
	
    public function __construct()
    {
        helper(['url', 'form']);
    }

    public function index()
    {
			if(!session()->has('loggedUser')){
				return redirect()->to('/login')->with('fail','You are logged out');
		}
		else{
			$GamesModel = new GamesModel();

			$data = [
				'gameslist' => $GamesModel->findColumn('name'),
			];
            return view('user/index', $data);
        }
		

    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function loadRecord()
	{
		$request = service('request');
		$searchData = $request->getGet(); // OR $this->request->getGet();

		$search = "";
		if (isset($searchData) && isset($searchData['search'])) {
			$search = $searchData['search'];
		}

		// Get data 
		$users = new \App\Models\UsersModel();

		if ($search == '') {
			$paginateData = $users->paginate(5);
		} else {
			$paginateData = $users->select('*')
				->orLike('name', $search)
				->orLike('email', $search)    			
				->paginate(5);
		}

		$data = [
			'users' => $paginateData,
			'pager' => $users->pager,
			'search' => $search
		];

		return view('users', $data);
	}
}
