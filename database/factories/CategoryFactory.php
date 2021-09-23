<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        $word = $faker->word;
    	return [
    	    'name' => $word,
            'slug' => str_slug($word),
    	];
    }
}
