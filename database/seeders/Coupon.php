<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Coupon extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coupon')->insert([
            ['coupon_code'=>'10%','value'=> 10],
            ['coupon_code'=>'20%','value'=> 20],
            ['coupon_code'=>'30%','value'=> 30]
        ]);
    }
}
