<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $primaryKey = 'id_course';

    // Получить название курса из списка курсов
    public function HandbookCourse()
    {
        return $this->hasMany('App\Handbook_course');
    }

    // Получить автора курса
    public function User()
    {
        return $this->hasMany('App\User');
    }
}
