<?php

namespace App\Controllers;

use App\Models\UserModel;

// use App\Controllers\BaseController;

class Login extends BaseController
{
    private $user;
    private $session;

    public function __construct()
    {
        helper(['form', 'session']);
        $this->session = session();

        $this->user = new UserModel();

    }
    public function index()
    {
        return view('login');
    }

    public function loginValidate()
    {

        $inputs = $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[5]',
        ]);

        if (!$inputs) {
            return view('login', [
                'validation' => $this->validator,
            ]);
        }

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $this->user->where('email', $email)->first();
        if ($user) {
            $pass = '';

            $pass = $user['password'];
            // if($pass == md5($password)){
            //     $authPassword = true;
            // }else {
            //     $authPassword = false;
            // }
            $authPassword = password_verify($password, $pass);
            //   dd($user, $pass, $password, $authPassword);
            if ($authPassword) {
                $sessionData = [
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'isLoggedIn' => true,
                ];

                session()->set($sessionData);
                // dd(session()->get('name'));
                return redirect()->route('admin');
            }

            session()->setFlashdata('msg', 'Failed! incorrect password');
            return redirect()->route('login');
        } else {
            session()->setFlashdata('msg', 'Failed! incorrect email');

            return redirect()->route('login');
        }

    }

    public function logout()
    {
        $session = session();
        session()->destroy();
        return redirect()->route('login');
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }

}
