<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HastagProduct extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hastag_product')->insert([
            ['product_id' => 4, 'hastag_product' => 'Jacket'],

            ['product_id' => 1, 'hastag_product' => 'Stress'],
            ['product_id' => 2, 'hastag_product' => 'Stress'],
            ['product_id' => 5, 'hastag_product' => 'Stress'],
            ['product_id' => 4, 'hastag_product' => 'Stress'],
            ['product_id' => 19, 'hastag_product' => 'Stress'],
            ['product_id' => 21, 'hastag_product' => 'Stress'],
            ['product_id' => 20, 'hastag_product' => 'Stress'],
            ['product_id' => 22, 'hastag_product' => 'Stress'],
            ['product_id' => 47, 'hastag_product' => 'Stress'],
            ['product_id' => 14, 'hastag_product' => 'Stress'],
            ['product_id' => 16, 'hastag_product' => 'Stress'],
            ['product_id' => 3, 'hastag_product' => 'Stress'],

            ['product_id' => 5, 'hastag_product' => 'Skirt'],
            ['product_id' => 33, 'hastag_product' => 'Skirt'],
            ['product_id' => 40, 'hastag_product' => 'Skirt'],
            ['product_id' => 43, 'hastag_product' => 'Skirt'],

            ['product_id' => 2, 'hastag_product' => 'Shirt'],
            ['product_id' => 3, 'hastag_product' => 'Shirt'],
            ['product_id' => 11, 'hastag_product' => 'Shirt'],
            ['product_id' => 49, 'hastag_product' => 'Shirt'],

            ['product_id' => 1, 'hastag_product' => 'Summer'],
            ['product_id' => 8, 'hastag_product' => 'Summer'],
            ['product_id' => 10, 'hastag_product' => 'Summer'],
            ['product_id' => 13, 'hastag_product' => 'Summer'],
            ['product_id' => 14, 'hastag_product' => 'Summer'],
            ['product_id' => 16, 'hastag_product' => 'Summer'],
            ['product_id' => 18, 'hastag_product' => 'Summer'],
            ['product_id' => 19, 'hastag_product' => 'Summer'],
            ['product_id' => 24, 'hastag_product' => 'Summer'],
            ['product_id' => 37, 'hastag_product' => 'Summer'],

            ['product_id' => 1, 'hastag_product' => 'Woman'],
            ['product_id' => 2, 'hastag_product' => 'Woman'],
            ['product_id' => 4, 'hastag_product' => 'Woman'],
            ['product_id' => 5, 'hastag_product' => 'Woman'],
            ['product_id' => 6, 'hastag_product' => 'Men'],
            ['product_id' => 7, 'hastag_product' => 'Woman'],
            ['product_id' => 8, 'hastag_product' => 'Woman'],
            ['product_id' => 9, 'hastag_product' => 'Men'],
            ['product_id' => 10, 'hastag_product' => 'Woman'],
            ['product_id' => 11, 'hastag_product' => 'Men'],
            ['product_id' => 12, 'hastag_product' => 'Woman'],
            ['product_id' => 13, 'hastag_product' => 'Woman'],
            ['product_id' => 14, 'hastag_product' => 'Woman'],
            ['product_id' => 15, 'hastag_product' => 'Woman'],
            ['product_id' => 16, 'hastag_product' => 'Woman'],
            ['product_id' => 17, 'hastag_product' => 'Men'],
            ['product_id' => 18, 'hastag_product' => 'Men'],
            ['product_id' => 19, 'hastag_product' => 'Woman'],
            ['product_id' => 20, 'hastag_product' => 'Woman'],
            ['product_id' => 21, 'hastag_product' => 'Woman'],
            ['product_id' => 22, 'hastag_product' => 'Woman'],
            ['product_id' => 23, 'hastag_product' => 'Woman'],
            ['product_id' => 24, 'hastag_product' => 'Woman'],
            ['product_id' => 25, 'hastag_product' => 'Men'],
            ['product_id' => 26, 'hastag_product' => 'Men'],
            ['product_id' => 27, 'hastag_product' => 'Men'],
            ['product_id' => 28, 'hastag_product' => 'Woman'],
            ['product_id' => 29, 'hastag_product' => 'Woman'],
            ['product_id' => 30, 'hastag_product' => 'Woman'],
            ['product_id' => 31, 'hastag_product' => 'Woman'],
            ['product_id' => 32, 'hastag_product' => 'Woman'],
            ['product_id' => 33, 'hastag_product' => 'Woman'],
            ['product_id' => 34, 'hastag_product' => 'Woman'],
            ['product_id' => 35, 'hastag_product' => 'Woman'],
            ['product_id' => 36, 'hastag_product' => 'Woman'],
            ['product_id' => 37, 'hastag_product' => 'Woman'],
            ['product_id' => 38, 'hastag_product' => 'Woman'],
            ['product_id' => 39, 'hastag_product' => 'Woman'],
            ['product_id' => 40, 'hastag_product' => 'Woman'],
            ['product_id' => 41, 'hastag_product' => 'Woman'],
            ['product_id' => 42, 'hastag_product' => 'Woman'],
            ['product_id' => 43, 'hastag_product' => 'Woman'],
            ['product_id' => 44, 'hastag_product' => 'Woman'],
            ['product_id' => 45, 'hastag_product' => 'Woman'],
            ['product_id' => 46, 'hastag_product' => 'Woman'],
            ['product_id' => 47, 'hastag_product' => 'Men'],
            ['product_id' => 48, 'hastag_product' => 'Men'],
            ['product_id' => 49, 'hastag_product' => 'Men'],
            ['product_id' => 50, 'hastag_product' => 'Men'],
        ]);
    }
}
