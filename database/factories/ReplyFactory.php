<?php

namespace Database\Factories;

use App\Models\Reply;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReplyFactory extends Factory
{
    protected $model = Reply::class;

    public function definition(): array
    {
    	return [
    	    'body' => $faker->text,
            'question_id' => function() {
                return Question::all()->random();
            },
            'user_id' => function() {
                return User::all()->random();
            },
    	];
    }
}
