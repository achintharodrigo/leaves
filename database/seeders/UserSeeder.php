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
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('welcome'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'ishika',
            'email' => 'ishika@example.com',
            'password' => Hash::make('welcome'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'ciel',
            'email' => 'ciel@example.com',
            'password' => Hash::make('welcome'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
