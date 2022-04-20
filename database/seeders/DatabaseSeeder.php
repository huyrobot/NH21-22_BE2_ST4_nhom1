<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call([
            user::class,
            admin::class,
            Blog::class,
            coupon::class,
            Hastag_blog::class,
            Hastag_product::class,
            Product::class
        ]);
    }
}
