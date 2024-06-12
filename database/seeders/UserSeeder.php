<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(80)->create();

        User::create([
            'name'=>'Citra Lestari',
            'email'=>'citra@gmail.com',
            'email_verified_at'=> now(),
            'password'=> Hash::make("123456"),
            'roles'=> 'mahasiswa'
        ]);
    }
}
