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

    function add($data)
    {
        if ($this->builder->insert($data)) {
            return 'success';
        } else {
            return 'failed';
        }
    }

    public function getData($kode_fakultas)
    {
        $db = db_connect();
        $query = $db->query("SELECT * FROM fakultas WHERE kode_fakultas = '$kode_fakultas'");
        return $query->getRow();
    }

    function updateData($kode_fakultas, $namaFakltas, $deskripsiFakultas)
    {
        $message = '';
        $db = db_connect();
        try {
            if (! $db->simpleQuery("UPDATE fakultas SET nama_fakultas = '$namaFakltas', deskripsi_fakultas = '$deskripsiFakultas' WHERE fakultas.kode_fakultas = '$kode_fakultas'")) {
                $message = $db->error();
            } else {
                $message = 'success';
            }
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }
        return $message;
    }

    function    deleteData($kode_fakultas)
    {
        $message = '';
        $db = db_connect();
        try {
            if (! $db->simpleQuery("DELETE FROM fakultas WHERE kode_fakultas = '$kode_fakultas'")) {
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
