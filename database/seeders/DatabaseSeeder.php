<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Question;
use App\Models\Reply;
use App\Models\Like;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        // \App\Models\Category::factory(5)->create();
        \App\Models\Question::factory(10)->create();
        // \App\Models\Reply::factory(10)->create()->each(function($reply){
        //     return $reply->like()->save(\App\Models\Like::factory()->make());
        // });
        // factory(User::class, 10)->create();
        // factory(Category::class, 5)->create();
        // factory(Question::class, 10)->create();
        // factory(Reply::class, 50)->create()->each(function ($reply){
        //     return $reply->like()->save(factory(Like::class)->make());
        // });
    }
}
