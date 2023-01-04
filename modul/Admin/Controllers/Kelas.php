<?php
namespace Modul\Admin\Controllers;
use App\Controllers\BaseController;

class Kelas extends BaseController
{
    public function index()
    {
        $data = [
            'mkelas' => 1
        ];
        return view('Modul\Admin\Views\kelas_v',$data);
    }
}
