<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Entry_coursePolicy
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

    public function entry_course($user)
    {
        if ($user->name == "user" and $user->name == "prerod")
        {
            return true;
        }
        else
        {
            return null;
        }
    }
}
