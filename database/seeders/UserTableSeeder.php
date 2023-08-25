<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear existing data if needed
        User::truncate();

        // Create or update records
        User::firstOrCreate(
            ['email' => 'hima@gmail.com'],
            [
                'name' => 'Hima',
                'role' => 'admin',
                'password' => bcrypt('123456')
            ]
        );

        User::firstOrCreate(
            ['email' => 'beautician@gmail.com'],
            [
                'name' => 'Beautician',
                'role' => 'beautician',
                'password' => bcrypt('123457')
            ]
        );

        User::firstOrCreate(
            ['email' => 'doctor@gmail.com'],
            [
                'name' => 'Doctor',
                'role' => 'doctor',
                'password' => bcrypt('123458')
            ]
        );


    }



}
