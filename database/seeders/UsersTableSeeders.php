<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeders extends Seeder
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
                'name'=>'fafe',
               'email'=>'dada@gmail.com',
               'role'=> 0,
               'password'=> hash::make('123456'),
            ]
        ];

        foreach ($users as $key => $user) 
        {
            User::create($user);
        }
    }
}
