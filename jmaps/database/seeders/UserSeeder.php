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
     */
    public function run(): void
    {
        // Admin
        User::factory()->create([
            'name'      => config('admin.name'),
            'email'     => config('admin.email'),
            'password'  => Hash::make(config('admin.password')),
            'role_id'   => 1,
        ]);

         // Mapper
        User::factory()->create([
            'name'      => 'Probert L',
            'email'     => 'probertl@fp.insjoaquimmir.cat',
            'password'  => Hash::make('12345678'),
            'role_id'   => 3,
        ]);

        // Business
        User::factory()->create([
            'name'      => 'J. Zeballos V',
            'email'     => 'jzeballosv@fp.insjoaquimmir.com',
            'password'  => Hash::make('12345678'),
            'role_id'   => 2,
        ]);
    }
}
