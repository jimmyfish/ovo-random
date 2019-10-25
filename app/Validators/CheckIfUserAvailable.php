<?php


namespace App\Validators;


use App\User;

class CheckIfUserAvailable
{
    public function validate($attributes, $value, $parameters)
    {
        $user = User::find(request()->input('user'));

        if (is_null($user)) {
            return false;
        }

        return true;
    }
}