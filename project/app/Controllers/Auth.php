<?php

namespace App\Controllers;

use App\Libraries\Hash;

class Auth extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }
    public function index()
    {
        return view('auth/login');
    }
    public function login()
    {
        return view('auth/login');
    }

    public function check()
    {
        $validation = $this->validate([
            'email' => [
                'rules' => 'required|is_not_unique[admin.email]',
                'errors' => [
                    'required' => 'Your Email Id is required',
                    'is_not_unique' => 'Email Id is not registered on our service'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[12]',
                'errors' => [
                    'required' => 'Your Password is required',
                    'min_length' => 'Password must have atleast 5 characters in length',
                    'max_length' => 'Password must not have characters more than 12 in length'
                ]
            ]
        ]);

        if (!$validation) {
            return view('auth/login', ['validation' => $this->validator]);
        } else {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $userModel = new \App\Models\AdminModel();
            $userInfo = $userModel->where('email', $email)->first();
            $check_password = Hash::check($password, $userInfo['password']);

            if (!$check_password) {
                session()->setFlashdata('fail', 'Incorrect password');
                return redirect()->to('/auth')->withInput();
            } else {
                $user_id = $userInfo['id'];
                $name = $userInfo['name'];
                session()->set('loggedAdmin', $user_id);
                session()->set('name', $name);
                return redirect()->to('/admin');
            }
        }
    }

    function logout()
    {
        if (session()->has('loggedAdmin')) {
            session()->remove('loggedAdmin');
            return redirect()->to('/auth')->with('fail', 'You are logged out');
        } else {
            session()->remove('loggedAdmin');
            return redirect()->to('/auth')->with('fail', 'You are logged out');
        }
    }
}
