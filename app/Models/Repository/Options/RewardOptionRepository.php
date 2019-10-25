<?php


namespace App\Models\Repository\Options;


use App\RewardOption;

class RewardOptionRepository implements RewardOptionRepositoryInterface
{
    private $model;

    public function __construct(RewardOption $model)
    {
        $this->model = $model;
    }

    public function getDailyLimit()
    {
        return $this->model->where([
            'key' => 'daily_limit'
        ])->first();
    }
}