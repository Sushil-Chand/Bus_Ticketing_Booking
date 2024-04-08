<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'address' => 'Hadigau',
            'status' => 1,
            'contactno' => '9856221540',
            'profile_image' => null,
            'usertype' => 0, // 
            'password' => bcrypt('12345678'), 
            'email_verified_at' => null,
            'remember_token' => null,
        ]);
    }
}
