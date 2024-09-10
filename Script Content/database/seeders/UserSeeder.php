<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Mahidul Islam',
            'email' => 'admin@freshmat.com',
            'password' => Hash::make('admin'),
            'role' => '2',
        ]);

        UserProfile::create([
            'userId' => $user->id,
        ]);
    }
}
