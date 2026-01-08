<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rols = ['admin', 'business', 'mapper'];

        foreach ($rols as $role) {
            DB::table('roles')->updateOrInsert( // ho fem amb DB encara no tenim models
                ['name' => $role] 
            );
        }
    }
    
}
