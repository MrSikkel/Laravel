<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ask extends Model
{
    protected $primaryKey = 'id_ask';

     // Получить вопрос, на который был дан ответ
    public function Question()
    {
        return $this->hasMany('App\Question');
    }
}
