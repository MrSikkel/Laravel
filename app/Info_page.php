<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info_page extends Model
{
    protected $primaryKey = 'id_page';

    // Получить автора страницы
    public function User()
    {
        return $this->hasMany('App\User');
    }
}
