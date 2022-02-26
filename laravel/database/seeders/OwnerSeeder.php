<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'owner',
                'email' => 'test-owner@example.com',
                'password' => Hash::make('password'),
                'created_at' => '2001/11/11 10:00:00',
            ],
            [
                'name' => 'owner2',
                'email' => 'test-owner2@example.com',
                'password' => Hash::make('password'),
                'created_at' => '2001/11/11 10:00:00',
            ],
            [
                'name' => 'owner3',
                'email' => 'test-owner3@example.com',
                'password' => Hash::make('password'),
                'created_at' => '2001/11/11 10:00:00',
            ],
            [
                'name' => 'owner4',
                'email' => 'test-owner4@example.com',
                'password' => Hash::make('password'),
                'created_at' => '2001/11/11 10:00:00',
            ],
            [
                'name' => 'owner5',
                'email' => 'test-owner5@example.com',
                'password' => Hash::make('password'),
                'created_at' => '2001/11/11 10:00:00',
            ],
            [
                'name' => 'owner6',
                'email' => 'test-owner6@example.com',
                'password' => Hash::make('password'),
                'created_at' => '2001/11/11 10:00:00',
            ],
            [
                'name' => 'owner7',
                'email' => 'test-owner7@example.com',
                'password' => Hash::make('password'),
                'created_at' => '2001/11/11 10:00:00',
            ],
            [
                'name' => 'owner8',
                'email' => 'test-owner8@example.com',
                'password' => Hash::make('password'),
                'created_at' => '2001/11/11 10:00:00',
            ]
        ]);
    }
}
