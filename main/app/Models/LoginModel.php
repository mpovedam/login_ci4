<?php

namespace App\Models;

use CodeIgniter\Model;
use \Myth\Auth\Models\LoginModel as LoginModels;


class LoginModel extends LoginModels
{
    protected $table = 'auth_logins';
    protected $primaryKey = 'id';

    protected $returnType = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'ip_address', 'email', 'user_id', 'date', 'success'
    ];

    protected $useTimestamps = false;

    protected $validationRules = [
        'ip_address' => 'required',
        'email'      => 'required',
        'user_id'    => 'permit_empty|integer',
        'date'       => 'required|valid_date',
    ];
    protected $validationMessages = [];
    protected $skipValidation = false;

    public function getLastActivity(int $userId)
    {
        if (null === $found = cache("{$userId}_logins")) {
            $this->builder()
                ->where('id', $this->builder()->selectMax('id', 'maxId'))
                ->where('user_id', $userId);

            $query = $this->builder->get();
            //$query   = $found->getCompiledSelect();

            foreach ($query->getResult() as $row) {
                $date =  $row->date;
            }

            cache()->save("{$userId}_logins", $found, 300);
        }

        return $date;
    }
}
