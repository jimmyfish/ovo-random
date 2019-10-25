<?php


namespace App\Models\Repository;


use App\Models\Repository\Options\RewardOptionRepository;
use App\Models\Repository\Options\RewardOptionRepositoryInterface;
use App\Models\Repository\Reward\RewardRepository;
use App\Models\Repository\Reward\RewardRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class CommonRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            RewardRepositoryInterface::class,
            RewardRepository::class
        );
        $this->app->bind(
            RewardOptionRepositoryInterface::class,
            RewardOptionRepository::class
        );
    }
}