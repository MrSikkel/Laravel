<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $primaryKey = 'id_profile';

    // Получить пользователя профиля
    public function User()
    {
        return $this->hasMany('App\User');
    }
}
