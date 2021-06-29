<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('booking')->insert(['room_id' => 1, 'customers_id' =>78,'from_date'=>'14','to_date'=>'15']);
        DB::table('booking')->insert(['room_id' => 2, 'customers_id' =>59,'from_date'=>'16','to_date'=>'20']);
        DB::table('booking')->insert(['room_id' => 3, 'customers_id' =>226,'from_date'=>'30','to_date'=>'5']);
        DB::table('booking')->insert(['room_id' => 4, 'customers_id' =>44,'from_date'=>'25','to_date'=>'31']);
    }
}
