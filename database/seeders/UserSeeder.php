<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

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
            'name' => 'admin',
            'level' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(60),
        ]);
    }
}
