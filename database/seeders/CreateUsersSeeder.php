<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{

    public function run()

    {

        $user = [

            [

               'name'=>'reservator',

               'email'=>'reservator@gmail.com',

                'is_admin'=>'2',

               'password'=> bcrypt('reservator'),

            ],
            [

               'name'=>'admin',

               'email'=>'admin@gmail.com',

                'is_admin'=>'0',

               'password'=> bcrypt('admin'),

            ],

            [

               'name'=>'kepalapuskesmas',

               'email'=>'kepalapuskesmas@gmail.com',

                'is_admin'=>'1',

               'password'=> bcrypt('kepalapuskesmas'),

            ],

        ];



        foreach ($user as $key => $value) {

            User::create($value);

        }

    }

}
