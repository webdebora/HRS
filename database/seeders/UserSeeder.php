<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Make sure to import the User model
use Illuminate\Support\Facades\Hash; // Use Hash for password hashing

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('12345678'), // Make sure to hash the password
            'role' => 'admin', // Assuming you have a role field
        ]);

        // Create Manager User
        User::create([
            'name' => 'Manager User',
            'email' => 'manager@example.com',
            'password' => Hash::make('password123'), // Make sure to hash the password
            'role' => 'manager', // Assuming you have a role field
        ]);

        // Create Regular User
        User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('password123'), // Make sure to hash the password
            'role' => 'user', // Assuming you have a role field
        ]);
    }
}
