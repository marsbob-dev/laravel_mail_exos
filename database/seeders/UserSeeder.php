<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'name' => 'Admin1',
                'role_id' => 2,
                'email' => 'n@n',
                'password' => Hash::make('test-test'),
            ],
            [
                'name' => 'Admin2',
                'role_id' => 2,
                'email' => 'h@h',
                'password' => Hash::make('test-test'),
            ],
            [
                'name' => 'Admin3',
                'role_id' => 2,
                'email' => 'a@a',
                'password' => Hash::make('test-test'),
            ],
            [
                'name' => 'User1',
                'role_id' => 1,
                'email' => 'e@a',
                'password' => Hash::make('test-test'),
            ],
            [
                'name' => 'User2',
                'role_id' => 1,
                'email' => 'e@o',
                'password' => Hash::make('test-test'),
            ],
            [
                'name' => 'User3',
                'role_id' => 1,
                'email' => 'eo@a',
                'password' => Hash::make('test-test'),
            ],
            [
                'name' => 'User4',
                'role_id' => 1,
                'email' => 'e@la',
                'password' => Hash::make('test-test'),
            ],
            [
                'name' => 'User5',
                'role_id' => 1,
                'email' => 'ez@a',
                'password' => Hash::make('test-test'),
            ],
        ]);
    }
}
