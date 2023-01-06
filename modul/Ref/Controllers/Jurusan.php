<?php
namespace Modul\Ref\Controllers;
use App\Controllers\BaseController;
use \Modul\Ref\Models\Mjurusan;
use \Hermawan\DataTables\DataTable;

class Jurusan extends BaseController
{
    protected $mjurusan;
    public function __construct(){
        $this->mjurusan = new Mjurusan();
    }
    public function index()
    {
        $data = [
            'mref' => 1,
            'smjurusan' => 1

        ];
        return view('App\Views\Layout\page\jurusan_v',$data);
    }
    public function datatable()
    {
        // if(isLogin() == false){
        //     return redirect()->to(base_url('auth'));
        // }; 
            $builder = $this->db->table('ref.jurusan')->select('kode_jurusan,nama_jurusan');
    
                return DataTable::of($builder)
                ->postQuery(function($builder){

                    $builder->orderBy('kode_jurusan', 'desc');
            
                })
                ->setSearchableColumns(['lower(nama_jurusan)'])
                ->add('action', function ($row) {
                    // $d = [$row->id ,$row->nama_level,$row->status];
                    return '<button type="button" class="btn btn-md btn-warning btnedit" title="Edit Data Bank" onclick="edit(\'' . $row->kode_jurusan . '\');"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-md btn-danger btnhapus" title="Hapus Data Bank" onclick="hapus(\'' . $row->kode_jurusan . '\');"><i class="fas fa-trash"></i></button>
                            ';
                })
                ->addNumbering('no')->toJson(true);
        
    }
    public function simpan()
    {
        $data = [
            "kode_jurusan" => $this->request->getPost('kd_jurusan'),
            'nama_jurusan' => $this->request->getPost('nama_jurusan'),
        ];
        $result = $this->mjurusan->saveJurusan($data);
        if($result){
            $responsd =[
                "status" => TRUE,
            ];
        }else{
            $responsd =[
                "status" => FALSE,
            ];
        }
        
        echo json_encode($responsd);
    }
}
