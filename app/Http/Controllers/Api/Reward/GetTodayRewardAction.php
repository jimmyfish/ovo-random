<?php

namespace App\Http\Controllers\Api\Reward;

use App\Http\Controllers\Controller;
use App\Models\Repository\Reward\RewardRepositoryInterface;
use App\Reward;
use Carbon\Carbon;

class GetTodayRewardAction extends Controller
{
    private $rewardRepository;

    public function __construct(RewardRepositoryInterface $rewardRepository)
    {
        $this->rewardRepository = $rewardRepository;
    }

    public function __invoke()
    {
        $data = $this->rewardRepository->getTodayReward();

        return response()->json(['data' => $data], 200);
    }
}
