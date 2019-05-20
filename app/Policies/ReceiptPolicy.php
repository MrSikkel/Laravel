<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReceiptPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //Удаление квитанции
    public function delete($user)
    {
        if ($user->name == "admin")
        {
            return true;
        }
        else
        {
            return null;
        }
    }
}
