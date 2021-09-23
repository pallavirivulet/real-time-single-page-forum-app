<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    protected $model = Question::class;

    public function definition(): array
    {
        $title = $faker->sentence();
    	return [
    	    'title' => $title,
            'slug'  => str_slug($title),
            'body'  => $faker->text,
            'category_id' => function() {
                return Category::all()->random();
            },
            'user_id' => function() {
                return User::all()->random();
            },
    	];
    }
}
