<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('docente')->updateOrInsert(
            ['email' => 'test@example.com'],
            ['nombre' => 'admin', 'apellido' => 'admin', 'password' => Hash::make('admin')]
        );
        
        DB::table('estudiantes')->updateOrInsert(
            ['email' => 'diego@example.com'],
            ['nombre' => 'admin', 'apellido' => 'admin', 'password' => Hash::make('admin')]
        ); 
        
    }
}
