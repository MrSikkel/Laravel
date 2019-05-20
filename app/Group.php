<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $primaryKey = 'id_group';

    // Получить политику
    public function Political()
    {
        return $this->hasMany('App\Political');
    }
}
