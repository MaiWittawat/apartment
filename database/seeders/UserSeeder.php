<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'owner';
        $user->email = 'owner@example.com';
        $user->phone_number = '0811231234';
        $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $user->role = 'OWNER';
        $user->save();

        $user = new User();
        $user->name = 'staff';
        $user->email = 'staff@example.com';
        $user->phone_number = '0800000000';
        $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $user->role = 'STAFF';
        $user->save();
        
    }
}
