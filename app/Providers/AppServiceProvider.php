<?php

namespace App\Providers;

use App\Validators\CheckIfUserAvailable;
use App\Validators\CheckIfUserHasAlreadyClaimReward;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend(
            'check_if_user_available',
            CheckIfUserAvailable::class
        );

        Validator::extend(
            'check_if_user_has_claim_reward',
            CheckIfUserHasAlreadyClaimReward::class
        );
    }
}
