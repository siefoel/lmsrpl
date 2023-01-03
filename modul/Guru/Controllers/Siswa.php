<?php
namespace Modul\Admin\Controllers;
use App\Controllers\BaseController;

class Siswa extends BaseController
{
    public function index()
    {
        $data = [
            'msiswa' => 1

        ];
        return view('Modul\Admin\Views\mapel_v',$data);
    }
    public function saveMapel()
    {
        $data = [
            "kode_mapel" => $this->request->getPost('kd_mapel'),
            'nama_mapel' => $this->request->getPost('nama_mapel'),
        ];
        $responsd =[
            "status" => TRUE,
            "data" => $data
        ];
        echo json_encode($responsd);
    }
}
