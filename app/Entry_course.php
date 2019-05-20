<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry_course extends Model
{
    protected $primaryKey = 'id_entry';

    // Получить пользователя
    public function User()
    {
        return $this->hasMany('App\User');
    }

    // Получить курс
    public function Course()
    {
        return $this->hasMany('App\Course');
    }

    // Получить контракт
    public function Contract()
    {
        return $this->hasMany('App\Contract');
    }
}
