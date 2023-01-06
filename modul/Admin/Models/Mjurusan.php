<?php
namespace Modul\Admin\Models;
use CodeIgniter\Model;

class Mjurusan extends Model
{
    protected $table = 'ref.jurusan';
    protected $allowedFields = ['kode_jurusan','nama_jurusan'];

    public function levelActiv()
    {
        
            $tblprov = $this->db->table('ref.level');
            $result = $tblprov->where('status', 1)->orderBy('nama_level','ASC')->get()->getResult();
        
        
        return $result;
    }
    

}
