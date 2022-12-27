<?php
namespace Modul\Ref\Controllers;
use App\Controllers\BaseController;

class Tingkat extends BaseController
{
    public function index()
    {
        $data = [
            'mref' => 1,
            'smtingkat' => 1

        ];
        return view('Modul\Ref\Views\tingkat_v',$data);
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
