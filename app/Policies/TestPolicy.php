<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestPolicy
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
        if ($user->name == "admin" and $user->name == "user")
        {
            return true;
        }
        else
        {
            return null;
        }
    }

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

    public function create($user)
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

    public function update($user)
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
