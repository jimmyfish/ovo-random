<?php

namespace App\Http\Controllers\Api\Reward;

use App\Http\Controllers\Controller;
use App\Http\Requests\GenerateRewardRequest;
use App\Models\Repository\Options\RewardOptionRepositoryInterface;
use App\Models\Repository\Reward\RewardRepositoryInterface;
use App\User;
use Illuminate\Http\Request;

class GenerateRewardAction extends Controller
{
    private $rewardRepository;
    private $rewardOptionRepository;

    public function __construct(
        RewardRepositoryInterface $rewardRepository,
        RewardOptionRepositoryInterface $rewardOptionRepository
    )
    {
        $this->rewardRepository = $rewardRepository;
        $this->rewardOptionRepository = $rewardOptionRepository;
    }

    public function __invoke(GenerateRewardRequest $request)
    {
        $user = User::find($request->input('user'));

        $reward = $this->rewardRepository
            ->create(
                $user,
                $this->generateReward($user->reward_start, $user->reward_end)
            )
        ;

        return response()->json(['data' => $reward], 200);
    }

    public function generateReward($start, $end)
    {
        $reward = 0;

        $dailyLimit = $this->rewardOptionRepository->getDailyLimit()->value;

        $todaySummary = $this->rewardRepository->getTodaySummary();

        if ($todaySummary < $dailyLimit) {
            $reward = round(rand($start, $end), -3);

            if (($reward + $todaySummary) >= $dailyLimit) {
                $reward = $dailyLimit - $todaySummary;
            }
        }

        return $reward;
    }
}
