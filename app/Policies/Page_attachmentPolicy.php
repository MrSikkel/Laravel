<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Page_attachmentPolicy
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
}
