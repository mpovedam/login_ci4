<?php

namespace App\Models;

use CodeIgniter\Model;
use \Myth\Auth\Models\UserModel as UserModels;
use App\Entities\User;


class UserModel extends UserModels
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = User::class;
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    function countAll()
    {
        $sQuery = "SELECT COUNT(id) as jml FROM users";
        $db = db_connect();
        $query = $db->query($sQuery)->getRow();
        return $query;
    }

    function filteredAll($search)
    {


        if ($search) {
            $query_search = " AND (username LIKE '%$search%' OR email LIKE '%$search%')";
        } else {
            $query_search = "";
        }


        $sQuery = "SELECT COUNT(id) as jml FROM users WHERE id != '' $query_search";
        $db = db_connect();
        $query = $db->query($sQuery)->getRow();
        return $query;
    }
}
