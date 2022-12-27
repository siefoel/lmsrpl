<?php
namespace Modul\Ref\Controllers;
use App\Controllers\BaseController;

class Mapel extends BaseController
{
    public function index()
    {
        $data = [
            'mref' => 1,
            'smmapel' => 1

        ];
        return view('Modul\Ref\Views\mapel_v',$data);
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
