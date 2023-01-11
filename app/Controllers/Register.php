<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
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
        return view('register');
    }

    public function store()
    {
        $rules = [
            'name' => 'required|min_length[2]|max_length[50]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[4]|max_length[50]',
            'confirmpassword' => 'matches[password]',
        ];

        if ($this->validate($rules)) {

            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];

            $this->user->save($data);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }

    }

}
