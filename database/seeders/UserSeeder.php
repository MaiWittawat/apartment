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
        $user->name = 'admin';
        $user->email = 'admin@example.com';
        $user->phone_number = '0811231234';
        $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $user->role = 'ADMIN';
        $user->save();


        $user = new User();
        $user->name = 'Test User';
        $user->email = 'test@example.com';
        $user->phone_number = '0999999999';
        $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $user->role = 'ADMIN';
        $user->save();
        
    }
}
