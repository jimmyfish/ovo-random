<?php


namespace App\Models\Repository\Reward;


use App\Reward;
use App\User;
use Illuminate\Database\Eloquent\Collection;

interface RewardRepositoryInterface
{
    public function create(User $user,int $reward): Reward;

    public function getTodayReward(): Collection;

    public function getTodaySummary();
}