<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $primaryKey = 'id_contract';

    // Получить карточку организациии
    public function OrganizationCard()
    {
        return $this->hasMany('App\Organization_card');
    }
}
