<?php

namespace App\Policies;

use App\User;
use App\Ask;
use Illuminate\Auth\Access\HandlesAuthorization;

class AskPolicy
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

    //Возможность отвечать на вопросы пользователю админy и манагерy
    public function create($user)
    {
        if ($user->name == "user" and $user->name == "admin" and $user->name == "manager")
        {
            return true;
        }
        else
        {
            return null;
        }
    }

    //Возможность просмотра пользователю админy и манагерy
    public function read($user)
    {
        if ($user->name == "user" and $user->name == "admin" and $user->name == "manager")
        {
            return true;
        }
        else
        {
            return null;
        }
    }

    //удаление ответа, для админа и манагера
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
