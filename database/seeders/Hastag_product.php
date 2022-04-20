<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Hastag_product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hastag_product')->insert([
            ['product_id' => 1, 'hastag_product' => 'jacket'],
            ['product_id' => 1, 'hastag_product' => 'stress'],
            ['product_id' => 1, 'hastag_product' => 'man'],
            ['product_id' => 2, 'hastag_product' => 'skirt'],
            ['product_id' => 2, 'hastag_product' => 'summer'],
            ['product_id' => 2, 'hastag_product' => 'woman'],
            ['product_id' => 3, 'hastag_product' => 'shirt'],
            ['product_id' => 3, 'hastag_product' => 'stress'],
            ['product_id' => 3, 'hastag_product' => 'summer']
        ]);
    }
}
