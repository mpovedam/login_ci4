<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
use \Myth\Auth\Entities\User as UserEntity;
use Myth\Auth\Models\LoginModel;
use CodeIgniter\I18n\Time;

class User extends UserEntity
{
    protected $datamap = [];
    protected $dates   = ['reset_at', 'reset_expires', 'created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    //var $order = array('id' => 'asc');

    /**
     * User state formatting:
     */
    public function getSetActive()
    {
        return $this->active == 1 ? 'Activo' : 'Inactivo';
    }

    /**
     * Parser last activity
     */
    public function getActivity()
    {
        $activity = model(LoginModel::class)->getLastActivity($this->id);

        $time = Time::parse($activity);

        return $time->humanize();
    }
}
