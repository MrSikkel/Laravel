<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
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
    //создание курса
    public function create($user)
    {
        if ($user->name == "admin" and $user->name == "manager")
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
        if ($user->name == "admin" and $user->name == "manager")
        {
            return true;
        }
        else
        {
            return null;
        }
    }

    // удаление курса
    public function delete($user)
    {
        if ($user->name == "admin" and $user->name == "manager")
        {
            return true;
        }
        else
        {
            return null;
        }
    }

    // просмотр курса
    public function read($user)
    {
        if ($user->name == "admin" and $user->name == "manager" and $user->name == "prepod" and $user->name == "user")
        {
            return true;
        }
        else
        {
            return null;
        }
    }
}
