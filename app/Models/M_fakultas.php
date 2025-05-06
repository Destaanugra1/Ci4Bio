<?php

namespace App\Models;

use CodeIgniter\Model;

class M_fakultas extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'fakultas';
    protected $primaryKey       = 'kode_fakultas';
    protected $orderBy          = 'deskripsi_fakultas';
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
        return $query->getResult();
    }

    function add($data) {
        if($this->builder->insert($data)) {
            return 'success';
        }else {
            return 'failed';
        }
    }
}
