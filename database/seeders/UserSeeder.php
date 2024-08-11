<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456'),
            'mobile'=>8812321242,
            'email_verified_at' => Carbon::now(),
            'gender'=>'male',
            'user_type' => 'admin'
        ]);
    }
}
