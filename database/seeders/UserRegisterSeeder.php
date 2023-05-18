<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = $request->all();

        $user = [
        'name' => $name,
        'email' => $email,
        'email_verified_at' => date('Y-m-d H:i:s'),
        'password' => Hash::make('pass'),
        ];

        DB::table('users')->insert($user);
    }
}
