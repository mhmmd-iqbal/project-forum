<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\ModelContact;
use CodeIgniter\API\ResponseTrait;

class Contact extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        helper('form');
        $data = [
            'judul' => 'Admin | Contact'
        ];
        return view('admin/contact', $data);
    }
    public function get()
    {
        $dataModel = new ModelContact();
        $data = $dataModel
            ->orderBy('created_at', 'desc')
            ->first();
        return $this->respond($data, 200);
    }
    public function update()
    {
        $dataModel = new ModelContact();
        if ($this->request->getVar('id') !== null) {
            $hasil = $dataModel->save([
                'id'    => $this->request->getVar('id'),
                'email' =>  $this->request->getVar('email'),
                'phone' =>  $this->request->getVar('phone'),
                'address' =>  $this->request->getVar('address'),
                'instagram' =>  $this->request->getVar('instagram'),
                'facebook' =>  $this->request->getVar('facebook'),
            ]);
        } else {
            $hasil = $dataModel->save([
                'email' =>  $this->request->getVar('email'),
                'phone' =>  $this->request->getVar('phone'),
                'address' =>  $this->request->getVar('address'),
                'instagram' =>  $this->request->getVar('instagram'),
                'facebook' =>  $this->request->getVar('facebook'),
            ]);
        }

        $res = [
            'status' => TRUE,
        ];
        return $this->respondCreated($res);
    }
}
