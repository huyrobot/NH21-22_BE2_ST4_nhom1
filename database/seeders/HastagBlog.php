<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HastagBlog extends Seeder
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
            ['blog_id' => 1, 'hastag_blog' => 'LifeStyle'],
            ['blog_id' => 1, 'hastag_blog' => 'StressStyle'],
            ['blog_id' => 1, 'hastag_blog' => 'Crafts'],
            ['blog_id' => 2, 'hastag_blog' => 'StressStyle'],
            ['blog_id' => 2, 'hastag_blog' => 'Denim'],
            ['blog_id' => 2, 'hastag_blog' => 'FashionTrends'],
            ['blog_id' => 3, 'hastag_blog' => 'BirthdayOutfits'],
            ['blog_id' => 3, 'hastag_blog' => 'LifeStyle'],
            ['blog_id' => 3, 'hastag_blog' => 'Party']
        ]);
    }
}
