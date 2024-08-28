<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'JeffMat1504',
            'identification' => '1256345829',
            'name' => 'Mendoza',
            'email' => 'jefferson@google.com',
            'phone' => '0965240384',
            'state' => 'active',
            'delete' => 0,
            '_branch' => 30,
            '_created_by' => 3,
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => null,
        ]);

        User::factory(10)->create();
    }
}
