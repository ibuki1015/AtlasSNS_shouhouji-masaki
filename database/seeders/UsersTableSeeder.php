<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'username' => '工藤新一',
                'email' => 'kudou@test.com',
                'password' => bcrypt('kudou4869'),
        ]);
        DB::table('users')->insert([
                'username' => '服部平次',
                'email' => 'hattori@test.com',
                'password' => bcrypt('hattori4869'),
        ]);
        DB::table('users')->insert([
                'username' => '世良真純',
                'email' => 'sera@test.com',
                'password' => bcrypt('sera4869'),
        ]);
        }
}
