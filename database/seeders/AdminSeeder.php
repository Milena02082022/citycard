<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $lastUserId = DB::table('users')->max('user_id');

        DB::table('users')->insert([
            'user_id' => $lastUserId + 1,
            'user_surname' => 'Недільська',
            'user_name' => 'Мілена',
            'phone_number' => '+380953392584',
            'email' => 'nedilska.milena@gmail.com',
            'password' => '13102023',
            'role' => 'admin',
        ]);      
    }
}
