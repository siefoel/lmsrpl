<?php
namespace Modul\Admin\Controllers;
use App\Controllers\BaseController;

class Pegawai extends BaseController
{
    public function index()
    {
        $data = [
            'mpegawai' => 1

        ];
        return view('Modul\Admin\Views\pegawai_v',$data);
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
