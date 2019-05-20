<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page_attachment extends Model
{
    protected $primaryKey = 'id_page_att';

    // Получить информационную страницу
    public function InfoPage()
    {
        return $this->hasMany('App\Info_page');
    }

    // Получить вложение
    public function Attachment()
    {
        return $this->hasMany('App\Attachment');
    }
}
