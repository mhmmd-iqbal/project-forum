<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{

    protected $session;
    function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data['error'] = $this->session->error;
        return view('login', $data);
    }

    public function signIn()
    {

        if ($this->request->getMethod() == 'post') {
            $username = $this->request->getVar('username');
            $email = $this->request->getVar('email');
            $pass = $this->request->getVar('pass');

            $dataModel = new UserModel;
            $data = $dataModel->checkUser($username, $email)->first();

            if ($data == null) {
                $this->session->setFlashdata('error', 'Password, Email dan Username Tidak Sesuai');
                return redirect()->to('/login');
            }
            $cekPass = $data['pass'];
            $res =  password_verify($pass, $cekPass);

            if ($res == FALSE) {
                $this->session->setFlashdata('error', 'Password, Email dan Username Tidak Sesuai');
                return redirect()->to('/login');
            }
            $sessionData = [
                'logged_in' => TRUE,
                'username'  => $data['username'],
                'level'     => $data['level'],
                'email'     => $data['email'],
            ];
            $this->session->set($sessionData);

            switch ($data['level']) {
                case "1":
                    return redirect()->to('/wps');
                    break;
                case "2":
                    return redirect()->to('/tutor');
                    break;

                default:
                    $this->session->setFlashdata('error', 'Sabar ya, Programmer lagi nge Develop hak akses kamu');
                    return redirect()->to('/login');
            }
        }
    }

    public function signOut()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }

    public function coba()
    {
        $hash =  password_hash("admin", PASSWORD_BCRYPT);
        $res =  password_verify("admin", $hash);
        echo $hash;
    }
    //--------------------------------------------------------------------

}
