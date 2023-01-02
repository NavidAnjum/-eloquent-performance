<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        	'user_id'=>1,
        	'title'=>$this->faker->randomElement(['perfect_answer','moderate_answer','worse_answer','no_answer']),
			'status' => $this->faker->randomElement([
												  '1',
												  '1',
												  '1',
												  '1',
												  '1',
												  '1',
												  '1',
												  '1',
												  '1',
												  '2',
												  '2',
												  '3',
											  ]),
		];
    }
}
