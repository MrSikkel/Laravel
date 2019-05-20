<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MessagePolicy
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

    //отправка сообщения
    public function send($user)
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

    //возможность удалить сообщение, к примеру если мат
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
