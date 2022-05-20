<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $table->id();
//        $table->string('name');
//        $table->string('email')->unique();
//        $table->timestamp('email_verified_at')->nullable();
//        $table->string('password');
//        $table->rememberToken();
//        $table->timestamps();
        DB::table('users')->insert([
            ['id'=> 1,'name'=>'admin','email'=>'admin@gmail.com','password'=>'$2y$10$FBMBX5hK4BCpbptOYHL4zeUH4O0f464FdnynWr.PpSuayFH7rYZVq'],
            ['id'=> 2,'name'=>'huy','email'=>'abc@gmail.com','password'=>'$2y$10$FBMBX5hK4BCpbptOYHL4zeUH4O0f464FdnynWr.PpSuayFH7rYZVq'],
        ]);
    }
}
