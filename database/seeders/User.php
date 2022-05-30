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
            ['id'=> 1,'name'=>'admin','email'=>'admin@gmail.com','role'=>'1','phone'=>'0987654321','address'=>'12 stress ABC','city'=>'HCM city','password'=>'$2y$10$FBMBX5hK4BCpbptOYHL4zeUH4O0f464FdnynWr.PpSuayFH7rYZVq'],
            ['id'=> 2,'name'=>'Robotic','email'=>'abc@gmail.com','role'=>'0','phone'=>'0123456789','address'=>'12 stress ABC','city'=>'Ha noi city','password'=>'$2y$10$FBMBX5hK4BCpbptOYHL4zeUH4O0f464FdnynWr.PpSuayFH7rYZVq'],
        ]);
    }
}
