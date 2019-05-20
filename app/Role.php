<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $primaryKey = 'id_role';

    // Получить пользователя
    public function User()
    {
        return $this->hasMany('App\User');
    }

    // Получить группу
    public function Group()
    {
        return $this->hasMany('App\Group');
    }
}
