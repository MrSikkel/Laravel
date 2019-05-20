<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date_and_time extends Model
{
    protected $primaryKey = 'id_dt';

    // Поулчить мастер класс
    public function MasterClass()
    {
        return $this->hasMany('App\Master_class');
    }
}
