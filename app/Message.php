<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $primaryKey = 'id_message';

    // Получить отправителя или получателя
    public function User()
    {
        return $this->hasMany('App\User');
    }
}
