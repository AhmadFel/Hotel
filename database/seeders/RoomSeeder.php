<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert(['type' => 'R', 'price' => 30.0]);
        DB::table('rooms')->insert(['type' => 'W', 'price' => 40.0]);
        DB::table('rooms')->insert(['type' => 'R', 'price' => 50.0]);
    }
}
