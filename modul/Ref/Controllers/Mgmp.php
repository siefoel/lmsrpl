<?php
namespace Modul\Ref\Controllers;
use App\Controllers\BaseController;
use \Modul\Ref\Models\Mmgmp;
use \Hermawan\DataTables\DataTable;

class Mgmp extends BaseController
{
    public function index()
    {
        $data = [
            'mref' => 1,
            'smmgmp' => 1

        ];
        return view('Modul\Ref\Views\mgmp_v',$data);
    }
    public function datatable()
    {
        // if(isLogin() == false){
        //     return redirect()->to(base_url('auth'));
        // }; 
            $builder = $this->db->table('mgmp')->select('id_mgmp,nama_mgmp,status');
    
                return DataTable::of($builder)
                ->postQuery(function($builder){

                    $builder->orderBy('id_mgmp', 'desc');
            
                })
                ->setSearchableColumns(['lower(nama_mgmp)'])
                ->add('action', function ($row) {
                    // $d = [$row->id ,$row->nama_level,$row->status];
                    return '<button type="button" class="btn btn-md btn-warning btnedit" title="Edit Data Bank" onclick="edit(\'' . $row->id_mgmp . '\');"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-md btn-danger btnhapus" title="Hapus Data Bank" onclick="hapus(\'' . $row->id_mgmp . '\');"><i class="fas fa-trash"></i></button>
                            ';
                })
                ->addNumbering('no')->toJson(true);
        
    }
}
