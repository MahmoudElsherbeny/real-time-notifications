<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
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
        ];
    }
}
