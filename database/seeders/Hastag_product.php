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
            ['product_id' => 1, 'hastag_product' => 'Jacket'],
            ['product_id' => 2, 'hastag_product' => 'Skirt'],
            ['product_id' => 3, 'hastag_product' => 'Shirt']
        ]);
    }
}
