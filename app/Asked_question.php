<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asked_question extends Model
{
    protected $primaryKey = 'id_question';

    // Получить пользователя, который задал вопрос
    public function User()
    {
        return $this->hasMany('App\User');
    }
}
