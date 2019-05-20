<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class QuestionPolicy
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

    //Возможность задавать вопросы
    public function create($user)
    {
        if ($user->name == "user" and $user->name == "admin" and $user->name == "manager" and $user->name == "prepod")
        {
            return true;
        }
        else
        {
            return null;
        }
    }

    //прочтение вопроса
    public function read($user)
    {
        if ($user->name == "user" and $user->name == "admin" and $user->name == "manager" and $user->name == "prepod")
        {
            return true;
        }
        else
        {
            return null;
        }
    }

    //удаление вопроса
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

}
