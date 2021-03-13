<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'name' => 'Adventure',
            'slug' => 'adventure',
        ]);

        Genre::create([
            'name' => 'Crime',
            'slug' => 'crime',
        ]);

        Genre::create([
            'name' => 'Fantasy',
            'slug' => 'fantasy',
        ]);

        Genre::create([
            'name' => 'Fairytale',
            'slug' => 'fairytale',
        ]);

        Genre::create([
            'name' => 'Historical',
            'slug' => 'historical',
        ]);

        Genre::create([
            'name' => 'Horror',
            'slug' => 'horror',
        ]);

        Genre::create([
            'name' => 'Romantic',
            'slug' => 'romantic',
        ]);

        Genre::create([
            'name' => 'Sci-Fi',
            'slug' => 'sci-fi',
        ]);

        Genre::create([
            'name' => 'Thriller',
            'slug' => 'thriller',
        ]);

        Genre::create([
            'name' => 'Mystery',
            'slug' => 'mystery',
        ]);
    }
}
