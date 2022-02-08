<?php

use Illuminate\Database\Seeder;

use App\Reaction;
use App\Post;

class ReactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Reaction::class, 20) -> create() -> each(function($reaction) {

            $posts = Post::inRandomOrder() -> limit(rand(0, 2)) -> get();

            $reaction -> posts() -> attach($posts);

            $reaction -> save();
        });
    }
}
