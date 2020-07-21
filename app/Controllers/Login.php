<?php

namespace App\Controllers;

class Login extends BaseController
{

    public function index()
    {
        return view('login');
    }

    public function signIn()
    {
        if ($this->request->getMethod() == 'post') {
            $username = $this->request->getVar('username');
            $email = $this->request->getVar('email');
            $pass = $this->request->getVar('pass');

            $where = [
                'username'  => $username,
                'email'     => $email,
            ];

            // BELUM SIAP LAGI 
            $db    = \Config\Database::connect();
            $builder = $db->table('tb_user');
            $builder->select(['username', 'name', 'pass']);
            $query = $builder->getWhere($where);

            dd($query->getResultObject());

            // SAMPE SINI TADI 
        }

        // return redirect()->to('/Admin/dashboard');
    }
    public function signOut()
    {
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
