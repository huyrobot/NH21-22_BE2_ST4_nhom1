<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class account_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account_user')->insert([
            ['user_id'=> 1,'username'=>'user1','password'=>'12345'],
            ['user_id'=> 2,'username'=>'user2','password'=>'12345'],
            ['user_id'=> 3,'username'=>'user3','password'=>'12345']
        ]);
    }
}
