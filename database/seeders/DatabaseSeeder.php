<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\place;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        for ($i=0; $i < 30; $i++) { 
            $place = place::create([
            'nomPlace'=>'null',
            ]);
        }
    }
}
