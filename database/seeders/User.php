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
        DB::table('user')->insert([
            ['id'=> 1,'username'=>'a1','password'=>'123'],
            ['id'=> 2,'username'=>'a2','password'=>'123'],
            ['id'=> 3,'username'=>'a3','password'=>'123']
        ]);
    }
}
