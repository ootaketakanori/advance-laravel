<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'tony',
            'age' => 35,
            'nationality' => 'American'
        ];
        DB::table('people')->insert($param);
        $param = [
            'name' => 'jack',
            'age' => 20,
            'nationality' => 'British'
        ];
        DB::table('people')->insert($param);
        $param = [
            'name' => 'jack',
            'age' => 20,
            'nationality' => 'British'
        ];
        DB::table('people')->insert($param);
        $param = [
            'name' => 'jack',
            'age' => 20,
            'nationality' => 'British'
        ];
        DB::table('people')->insert($param);
    }
}
