<?php
namespace Modul\Ref\Models;
use CodeIgniter\Model;

class Mjurusan extends Model
{
    protected $table = 'ref.jurusan';
    protected $allowedFields = ['kode_jurusan','nama_jurusan'];
    protected $useAutoIncrement = false;

    public function saveJurusan($data)
    {
        $builder = $this->db->table('ref.jurusan');
        $result = $builder->insert($data);
        return $result;
    }
}
