<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Login extends BaseController
{
    public function index()
    {
        echo view('login');
    }

    public function auth()
    {
        $session = session();
        $request = \Config\Services::request();
        $model = new User();
        $username = $request->getPost('username');
        $password = $request->getPost('password');
        $data = $model->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            // $verify_pass = password_verify($password, $pass);
            if($pass == $password){
                $ses_data = [
                    'nama'       => $data['nama'],
                    'username'     => $data['username'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            }else{
                $session->setFlashdata('msg', 'Password Salah');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Username Tidak Ditemukan');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
