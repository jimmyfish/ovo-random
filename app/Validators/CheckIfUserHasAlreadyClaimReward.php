<?php


namespace App\Validators;


use App\Reward;
use App\User;
use Carbon\Carbon;

class CheckIfUserHasAlreadyClaimReward
{
    public function validate($attributes, $value, $parameters)
    {
        $user = Reward::where('created_at', 'like', Carbon::now()->format('Y-m-d') . "%")->where([
            'user_id' => request()->input('user')
        ])->first();

        if (is_null($user)) {
            return true;
        }

        return false;
    }
}