<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Hastag_blog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hastag_blog')->insert([
            ['blog_id' => 1, 'hastag_blog' => 'Inspiring'],
             ['blog_id' => 2, 'hastag_blog' => 'Fashion Trends'],
              ['blog_id' => 3, 'hastag_blog' => 'Birthday Outfits']
        ]);
    }
}
