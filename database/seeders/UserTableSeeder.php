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
        // User::create([
        //     'name'=>'Hima',
        //     'role'=>'hima',

        //     'email'=>'hima@gmail.com',
        //     'password'=>bcrypt('123456')
        // ]);


        User::create([
            'name'=>'Beautician',
            'role'=>'beautician',
            'email'=>'beautician@gmail.com',
            'password'=>bcrypt('123457')
        ]);

        // User::create([
        //    'name'=>'Doctor',
        //    'role'=>'doctor',
        //    'email'=>'doctor@gmail.com',
        //   'password'=>bcrypt('123458')
        // ]);



    }
}
