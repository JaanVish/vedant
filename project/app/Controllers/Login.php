<?php

namespace App\Controllers;

use App\Libraries\Hash;

class Login extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }
    public function index()
    {
        return view('home');
    }

    public function login_check()
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
            return view('home', ['validation' => $this->validator]);
        } else {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $userModel = new \App\Models\UsersModel();
            $userInfo = $userModel->where('email', $email)->first();
            $check_password = Hash::check($password, $userInfo['password']);

            if (!$check_password) {
                session()->setFlashdata('fail', 'Incorrect password');
                return redirect()->to('/home')->withInput();
            } else {
                $user_id = $userInfo['id'];
                $name = $userInfo['name'];
                session()->set('loggedUser', $user_id);
                session()->set('name', $name);
                return redirect()->to('/user');
            }
        }
    }

    public function register()
    {
        $validation = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);

        if (!$validation) {
            return view('home', ['validation' => $this->validator]);
        } else {
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $phone = $this->request->getPost('phone');
            $password = $this->request->getPost('password');

            $values = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'password'=>Hash::make($password)
            ];

            $MonthlyModel = new \App\Models\UsersModel();
            $query = $MonthlyModel->insert($values);
            if (!$query) {
                return redirect()->back()->with('fail', 'Something went wrong');
                // return redirect()->to('auth/sign_up')->with('fail', 'Something went wrong');
            } else {
                return redirect()->to('user')->with('success', 'Data is saved successfully');
            }
        }
    }
}
