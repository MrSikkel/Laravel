<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $primaryKey = 'id_question';

    // Получить тест, в котором был задан вопрос
    public function Test()
    {
        return $this->hasMany('App\Test');
    }

    // Получить ответ на заданный вопрос
    public function Ask()
    {
        return $this->hasMany('App\Ask');
    }
}
