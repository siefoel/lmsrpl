<?php
namespace Modul\Admin\Controllers;
use App\Controllers\BaseController;

class Pembelajaran extends BaseController
{
    public function index()
    {
        $data = [
            'mpembelajaran' => 1

        ];
        return view('Modul\Admin\Views\pembelajaran_v',$data);
    }
    public function saveTingkat()
    {
        $data = [
            "kode_tingkat" => $this->request->getPost('kd_tingkat'),
            'nama_tingkat' => $this->request->getPost('nama_tingkat'),
        ];
        $responsd =[
            "status" => TRUE,
        ];
        echo json_encode($responsd);
    }
}
