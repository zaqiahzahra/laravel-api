<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    
     public function run(): void
     {
         // User::factory(10)->create();
         $this->call([
             AuthorSeeder::class,
             BookSeeder::class,
         ]);
     }
}
