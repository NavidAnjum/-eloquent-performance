<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Question;
use Database\Factories\QuestionFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//\App\Models\Article::factory()->count(30)->create();
		Question::factory()->count(30)->create()->each(function ($questions) {
			$questions->comment()->createMany(
				Comment::factory()->count(50)->make()->each(function ($comment) {
					$comment->user_id =rand(1,9);
				})->toArray()
			);
		});

	}
}
