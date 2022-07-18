<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            [
                'name' => 'aaa',
                'email' => 'test7@test.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'bbb',
                'email' => 'test8@test.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'ccc',
                'email' => 'test9@test.com',
                'password' => Hash::make('password123'),
            ],
        ]);
    }
}
