<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            [
                'first_name' => 'محمود',
                'last_name' => 'محمد',
                'email' => 'supervisor@gmail.com',
                'phone' => '01000000000',
                'status' => 1,
                'type' => 1,
                'password' => Hash::make(123456789), // password
                'remember_token' => Str::random(10),
                'mobile_code' => rand(100000,999999),
                'email_verified_at' => now(),
                'mobile_verified_at' => now(),
            ],
        ]);
    }
}
