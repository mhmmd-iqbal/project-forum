<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\ModelProfile;
use CodeIgniter\API\ResponseTrait;

class Profile extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $data = [
            'judul' => 'Admin | Profile'
        ];
        return view('admin/profile', $data);
    }
    public function get()
    {
        $dataModel = new ModelProfile();
        $data = $dataModel
            ->orderBy('created_at', 'desc')
            ->first();
        return $this->respond($data, 200);
    }
    public function update()
    {
        $dataModel = new ModelProfile();
        if ($this->request->getVar('id') !== null) {
            $hasil = $dataModel->save([
                'id'    => $this->request->getVar('id'),
                'profile_desc' =>  $this->request->getVar('profile_desc'),
            ]);
        } else {
            $hasil = $dataModel->save([
                'profile_desc' =>  $this->request->getVar('profile_desc'),
            ]);
        }

        $res = [
            'status' => TRUE,
        ];
        return $this->respondCreated($res);
    }
}
