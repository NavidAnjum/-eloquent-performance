<?php

namespace Database\Seeders;

use Database\Factories\QuestionFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(OrganiationSeeder::class);
    	$this->call(LoginSeeder::class);
    	$this->call(QuestionSeeder::class);


    }
}
