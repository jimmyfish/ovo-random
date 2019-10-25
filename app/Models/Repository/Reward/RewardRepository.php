<?php


namespace App\Models\Repository\Reward;


use App\Reward;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class RewardRepository implements RewardRepositoryInterface
{
    private $model;

    public function __construct(Reward $model)
    {
        $this->model = $model;
    }

    public function create(User $user, int $reward): Reward
    {
        $model = $this->model->create([
            'user_id' => $user->id,
            'reward_generated' => $reward,
            'created_at' => new \DateTime(),
        ]);

        return $model;
    }

    public function getTodayReward(): Collection
    {
        return $this->model->where('created_at', 'like', Carbon::now()->format('Y-m-d') . "%")->get();
    }

    public function getTodaySummary()
    {
        return $this->model->where('created_at', 'like', Carbon::now()->format('Y-m-d') . "%")->sum('reward_generated');
    }
}