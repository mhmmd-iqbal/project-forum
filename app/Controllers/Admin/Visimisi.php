<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\ModelVisimisi;
use CodeIgniter\API\ResponseTrait;

class Visimisi extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $data = [
            'judul' => 'Admin | Visi Misi'
        ];
        return view('admin/visimisi', $data);
    }

    public function updateVisi()
    {
        $dataModel = new ModelVisimisi();
        if ($this->request->getVar('id') !== null) {
            $hasil = $dataModel->save([
                'id'    => $this->request->getVar('id'),
                'vision_desc' =>  $this->request->getVar('vision_desc'),
            ]);
        } else {
            $hasil = $dataModel->save([
                'vision_desc' =>  $this->request->getVar('vision_desc'),
            ]);
        }

        $res = [
            'status' => TRUE,
        ];
        return $this->respondCreated($res);
    }

    public function updateMisi()
    {
        $dataModel = new ModelVisimisi();
        if ($this->request->getVar('id') !== null) {
            $hasil = $dataModel->save([
                'id'    => $this->request->getVar('id'),
                'mision_desc' =>  $this->request->getVar('mision_desc'),
            ]);
        } else {
            $hasil = $dataModel->save([
                'mision_desc' =>  $this->request->getVar('mision_desc'),
            ]);
        }

        $res = [
            'status' => TRUE,
        ];
        return $this->respondCreated($res);
    }

    public function get()
    {
        $dataModel = new ModelVisimisi();
        $data = $dataModel
            ->orderBy('created_at', 'desc')
            ->first();
        return $this->respond($data, 200);
    }
}
