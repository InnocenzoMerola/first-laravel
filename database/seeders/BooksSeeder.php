<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'title' => 'The Lord of the Rings',
            'author' => 'J.R.R. Tolkien',
            'year' => 1954,
            'description' => 'Buonasera',
        ]);

        for ($i=0; $i < 50; $i++) { 
            DB::table('books')->insert([
                'title' => fake()->words(rand(2,10), true),
                'author' => fake()->name(),
                'description' => fake()->paragraph(2,6),
                'year' => rand(1900, 2024),
                'image' => fake()->imageUrl(640, 480),
            ]);
        }
    }
}
