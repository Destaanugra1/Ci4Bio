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
        return $query->getResult();
    }

    function add($data)
    {
        if ($this->builder->insert($data)) {
            return 'success';
        } else {
            return 'failed';
        }
    }

    function getData($idprodi)
    {
        $db = db_connect();
        $query = $db->query("SELECT * FROM  programstudi WHERE id_programstudi = '$idprodi'");
        $respon = $query->getRow();
        return $respon;
    }

    function updateData($idprodi, $namaProdi, $deskripsiProdi)
    {
        $message = '';
        $db = db_connect();
        try {
            if (! $db->simpleQuery("UPDATE programstudi SET nama_programstudi = '$namaProdi', programstudi_deskripsi = '$deskripsiProdi' WHERE programstudi.id_programstudi = '$idprodi'")) {
                $message = $db->error();
            } else {
                $message = 'success';
            }
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }
        return $message;
    }


    function deleteData($idprodi)
    {
        $message = '';
        $db = db_connect();
        try {
            if (! $db->simpleQuery("DELETE FROM programstudi WHERE id_programstudi = '$idprodi'")) {
                $message = $db->error();
            } else {
                $message = 'success';
            }
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
}
