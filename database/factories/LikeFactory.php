<?php

namespace Database\Factories;

use App\Models\like;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LikeFactory extends Factory
{
    protected $model = like::class;

    public function definition(): array
    {
    	return [
    	    'user_id' => function() {
                return User::all()->random();
            },
    	];
    }
}
