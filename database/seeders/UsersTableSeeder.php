<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ali',
            'email' => 'Ali@task.com',
            'password' => 'password'
        ]);
        User::create([
            'name' => 'Samy',
            'email' => 'Samy@task.com',
            'password' => 'password'
        ]);
        User::create([
            'name' => 'Mohammed',
            'email' => 'Mohammed@task.com',
            'password' => 'password'
        ]);
        User::create([
            'name' => 'Ramy',
            'email' => 'Ramy@task.com',
            'password' => 'password'
        ]);
    }
}
