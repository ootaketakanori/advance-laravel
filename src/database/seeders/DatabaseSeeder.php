<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Person;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::factory(10)->create();
    }
}
