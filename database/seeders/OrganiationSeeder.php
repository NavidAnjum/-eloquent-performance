<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrganiationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Organization::factory(100)->create()->each(fn ($org) => $org->user()
			->createMany(User::factory( 50)->make()->map->getAttributes())
		);

    }
}
