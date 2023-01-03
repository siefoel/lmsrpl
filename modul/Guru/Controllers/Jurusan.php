<?php
namespace Modul\Admin\Controllers;
use App\Controllers\BaseController;

class Jurusan extends BaseController
{
    public function index()
    {
        $data = [
            'mjurusan' => 1

        ];
        return view('Modul\Ref\Views\jurusan_v',$data);
    }
    public function saveJurusan()
    {
        $data = [
            "kode_jurusan" => $this->request->getPost('kd_jurusan'),
            'nama_jurusan' => $this->request->getPost('nama_jurusan'),
        ];
        $responsd =[
            "status" => TRUE,
            "data" => $data
        ];
        echo json_encode($responsd);
    }
}
