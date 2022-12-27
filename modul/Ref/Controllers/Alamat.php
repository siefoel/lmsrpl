<?php
namespace Modul\Ref\Controllers;
use App\Controllers\BaseController;

class Alamat extends BaseController
{
    public function index()
    {
        $data = [
            'mref' => 1,
            'smalamat' => 1

        ];
        return view('Modul\Ref\Views\alamat_v',$data);
    }
}
