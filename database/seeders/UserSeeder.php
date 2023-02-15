<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'UCASA Admin',
                'email' => 'admin@codsa.com',
                'email_verified_at' => now(),
                'password' => Hash::make('ucasa@admin'), // password
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Super Admin',
                'email' => 'super@codsa.com',
                'email_verified_at' => now(),
                'password' => Hash::make('super@admin'), // password
                'remember_token' => Str::random(10),
            ]
        ];

        foreach ($users as $user)
        {
            User::create($user);
        }
    }
}
