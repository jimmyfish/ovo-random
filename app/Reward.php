<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    protected $table = 'reward';

    protected $fillable = [
        'user_id', 'created_at', 'reward_generated'
    ];
}
