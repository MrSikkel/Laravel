<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PassportPolicy
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

    public function read($user)
    {
        if ($user->name == "user" and $user->name == "admin")
        {
            return true;
        }
        else
        {
            return null;
        }
    }

    public function create($user)
    {
        if ($user->name == "admin" and $user->name == "manager" and $user->name == "prerod")
        {
            return true;
        }
        else
        {
            return null;
        }
    }

    //POST-запрос надо сделать еще??????
}
