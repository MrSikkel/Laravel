<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $primaryKey = 'id_test';

    // Получить автора теста
    public function User()
    {
        return $this->hasMany('App\User');
    }
}
