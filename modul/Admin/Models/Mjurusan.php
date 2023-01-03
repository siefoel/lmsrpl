<?php
namespace Modul\Manlevel\Models;
use CodeIgniter\Model;

class Mjurusan extends Model
{
    protected $table = 'ref.jurusan';
    protected $allowedFields = ['id','nama_level', 'status'];

    public function levelActiv()
    {
        
            $tblprov = $this->db->table('ref.level');
            $result = $tblprov->where('status', 1)->orderBy('nama_level','ASC')->get()->getResult();
        
        
        return $result;
    }
    

}
