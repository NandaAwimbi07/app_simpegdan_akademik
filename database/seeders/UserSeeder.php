<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'adminsimpeg',
            'email' => 'adminsimpeg',
            'username' => 'adminsimpeg',
            'password' => Hash::make('adminsimpeg'),
        ]);
    }
}
