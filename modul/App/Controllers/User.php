<?php
namespace Modul\App\Controllers;
use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'mapp' => 1,
            'smuser' => 1

        ];
        return view('Modul\App\Views\user_v',$data);
    }
}
