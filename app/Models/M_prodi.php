<?php

namespace App\Models;

use CodeIgniter\Model;

class M_prodi extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'programstudi';
    protected $primaryKey       = 'id_programstudi';

    protected $orderBy          = 'nama_programstudi';
    protected $orderByType      = 'ASC';

    protected $builder;

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $this->builder = $db->table($this->table);
    }

    public function list_all()
    {
        $this->builder->orderBy($this->orderBy, $this->orderByType);
        $query = $this->builder->get();
        return $query->getResult(); // ✅ sesuai returnType = 'object'
    }

    function add($data) {
        if($this->builder->insert($data)) {
            return 'success';
        }else {
            return 'failed';
        }
    }
}
