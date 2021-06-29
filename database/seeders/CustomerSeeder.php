<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name' => 'ahmad', 'mobile' => '05555507810', 'email' => 'sss@hotmail.com'
        ]);
        DB::table('customers')->insert([
            'name' => 'mohammed', 'mobile' => '055589605', 'email' => 'bbb@hotmail.com'
        ]);
    }
}
