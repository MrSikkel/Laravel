<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $primaryKey = 'id_survey';

    // Получить пользователя, прошедшего опрос
    public function User()
    {
        return $this->hasMany('App\User');
    }

    // Получить название теста
    public function Test()
    {
        return $this->hasMany('App\Test');
    }

    // Получить результат опроса
    public function Result()
    {
        return $this->hasMany('App\Result');
    }
}
