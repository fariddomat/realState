<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@realestate.com',
            'password' => bcrypt('password'), // Replace with a secure password
            // ... other user attributes ...
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'name' => 'moderator',
            'email' => 'moderator@realestate.com',
            'password' => bcrypt('password'), // Replace with a secure password
            // ... other user attributes ...
        ]);
        $user->assignRole('moderator');

        $user = User::create([
            'name' => 'owner',
            'email' => 'owner@realestate.com',
            'password' => bcrypt('password'), // Replace with a secure password
            // ... other user attributes ...
        ]);
        $user->assignRole('owner');


        $user = User::create([
            'name' => 'user',
            'email' => 'user@realestate.com',
            'password' => bcrypt('password'), // Replace with a secure password
            // ... other user attributes ...
        ]);
        $user->assignRole('user');

        $user = User::create([
            'name' => 'owner2',
            'email' => 'owner2@realestate.com',
            'password' => bcrypt('password'), // Replace with a secure password
            // ... other user attributes ...
        ]);
        $user->assignRole('owner');

        $user = User::create([
            'name' => 'owner3',
            'email' => 'owner3@realestate.com',
            'password' => bcrypt('password'), // Replace with a secure password
            // ... other user attributes ...
        ]);
        $user->assignRole('owner');

        $user = User::create([
            'name' => 'owner4',
            'email' => 'owner4@realestate.com',
            'password' => bcrypt('password'), // Replace with a secure password
            // ... other user attributes ...
        ]);
        $user->assignRole('owner');


    }
}
