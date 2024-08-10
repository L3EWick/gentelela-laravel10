<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::firstOrCreate(["name" => "Ismael Lima"], [
            'name' => 'Ismael Lima',
            'email' => 'ismaeldsl89@gmail.com',
            'nivel' => 'Super-Admin',
            'password' => 'teste123', //'$2y$10$eMMXLkP579E/hf8.oSBJRu.yndQDIU0XrjRsY/R9Sr6hxzjToy0gC', 
        ]);

    }
}
