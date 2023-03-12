<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Thabo',
            'last_name' => 'Makola',
            'phone_number' => '072 678 9483',
            'email' => 'thabo@gmail.com',
            'password' => bcrypt('thabo123#'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        User::create([
            'first_name' => 'Lebo',
            'last_name' => 'Makola',
            'phone_number' => '072 678 9485',
            'email' => 'lebo@gmail.com',
            'password' => bcrypt('lebo123#'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        User::create([
            'first_name' => 'Chris',
            'last_name' => 'Davidson',
            'phone_number' => '072 678 9473',
            'email' => 'chris@gmail.com',
            'password' => bcrypt('chris123#'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
