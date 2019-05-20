<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    protected $primaryKey = 'id_passport';

    // Получить владельца поспорта
    public function User()
    {
        return $this->hasMany('App\User');
    }
}
