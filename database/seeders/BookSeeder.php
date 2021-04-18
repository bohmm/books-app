<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = Book::create([
            'title' => 'The Da Vinci Code',
            'slug' => 'the-da-vinci-code',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis risus. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Maecenas aliquet accumsan leo. Nulla quis diam. Maecenas libero. Etiam bibendum elit eget erat. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Praesent id justo in neque elementum ultrices. Pellentesque pretium lectus id turpis. Etiam bibendum elit eget erat. Aliquam erat volutpat. Nullam rhoncus aliquam metus. Etiam egestas wisi a erat. Vivamus ac leo pretium faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque pretium lectus id turpis.',
            'book_cover_path' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1463592438l/30228538._SY475_.jpg',
            'code' => '123-4567-89-1',
            'published_at' => '2003',
        ]);
        $book->authors()->attach([7]);
        $book->genres()->attach([5, 9]);

        $book = Book::create([
            'title' => 'The Hobbit',
            'slug' => 'the-hobbit',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis risus. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Maecenas aliquet accumsan leo. Nulla quis diam. Maecenas libero. Etiam bibendum elit eget erat. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Praesent id justo in neque elementum ultrices. Pellentesque pretium lectus id turpis. Etiam bibendum elit eget erat. Aliquam erat volutpat. Nullam rhoncus aliquam metus. Etiam egestas wisi a erat. Vivamus ac leo pretium faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque pretium lectus id turpis.',
            'book_cover_path' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1546071216l/5907.jpg',
            'code' => '123-4567-89-2',
            'published_at' => '1937',
        ]);
        $book->authors()->attach([1]);
        $book->genres()->attach([1, 3]);

        $book = Book::create([
            'title' => 'The Pillars of the Earth',
            'slug' => 'the-pillars-of-the-earth',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis risus. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Maecenas aliquet accumsan leo. Nulla quis diam. Maecenas libero. Etiam bibendum elit eget erat. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Praesent id justo in neque elementum ultrices. Pellentesque pretium lectus id turpis. Etiam bibendum elit eget erat. Aliquam erat volutpat. Nullam rhoncus aliquam metus. Etiam egestas wisi a erat. Vivamus ac leo pretium faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque pretium lectus id turpis.',
            'book_cover_path' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1576956100l/5043.jpg',
            'code' => '123-4567-89-3',
            'published_at' => '1989',
        ]);
        $book->authors()->attach([5]);
        $book->genres()->attach([5]);

        $book = Book::create([
            'title' => 'Dune',
            'slug' => 'dune',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis risus. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Maecenas aliquet accumsan leo. Nulla quis diam. Maecenas libero. Etiam bibendum elit eget erat. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Praesent id justo in neque elementum ultrices. Pellentesque pretium lectus id turpis. Etiam bibendum elit eget erat. Aliquam erat volutpat. Nullam rhoncus aliquam metus. Etiam egestas wisi a erat. Vivamus ac leo pretium faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque pretium lectus id turpis.',
            'book_cover_path' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1555447414l/44767458.jpg',
            'code' => '123-4567-89-4',
            'published_at' => '1965',
        ]);
        $book->authors()->attach([2]);
        $book->genres()->attach([8]);

        $book = Book::create([
            'title' => 'Harry Potter and the Philosopher\'s Stone',
            'slug' => 'harry-potter-and-the-philosophers-stone',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis risus. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Maecenas aliquet accumsan leo. Nulla quis diam. Maecenas libero. Etiam bibendum elit eget erat. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Praesent id justo in neque elementum ultrices. Pellentesque pretium lectus id turpis. Etiam bibendum elit eget erat. Aliquam erat volutpat. Nullam rhoncus aliquam metus. Etiam egestas wisi a erat. Vivamus ac leo pretium faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque pretium lectus id turpis.',
            'book_cover_path' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1170803558l/72193.jpg',
            'code' => '123-4567-89-5',
            'published_at' => '1997',
        ]);
        $book->authors()->attach([3]);
        $book->genres()->attach([3]);

        $book = Book::create([
            'title' => 'Twenty Thousand Leagues Under the Seas',
            'slug' => 'twenty-thousand-leagues-under-the-seas',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis risus. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Maecenas aliquet accumsan leo. Nulla quis diam. Maecenas libero. Etiam bibendum elit eget erat. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Praesent id justo in neque elementum ultrices. Pellentesque pretium lectus id turpis. Etiam bibendum elit eget erat. Aliquam erat volutpat. Nullam rhoncus aliquam metus. Etiam egestas wisi a erat. Vivamus ac leo pretium faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque pretium lectus id turpis.',
            'book_cover_path' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1494979127l/33507.jpg',
            'code' => '123-4567-89-6',
            'published_at' => '1872',
        ]);
        $book->authors()->attach([6]);
        $book->genres()->attach([1, 8]);

        $book = Book::create([
            'title' => 'Carrie',
            'slug' => 'carrie',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis risus. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Maecenas aliquet accumsan leo. Nulla quis diam. Maecenas libero. Etiam bibendum elit eget erat. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Praesent id justo in neque elementum ultrices. Pellentesque pretium lectus id turpis. Etiam bibendum elit eget erat. Aliquam erat volutpat. Nullam rhoncus aliquam metus. Etiam egestas wisi a erat. Vivamus ac leo pretium faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque pretium lectus id turpis.',
            'book_cover_path' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1166254258l/10592._SY475_.jpg',
            'code' => '123-4567-89-7',
            'published_at' => '1974',
        ]);
        $book->authors()->attach([4]);
        $book->genres()->attach([6]);

        $book = Book::create([
            'title' => 'Digital Fortress',
            'slug' => 'digital-fortress',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis risus. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Maecenas aliquet accumsan leo. Nulla quis diam. Maecenas libero. Etiam bibendum elit eget erat. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Praesent id justo in neque elementum ultrices. Pellentesque pretium lectus id turpis. Etiam bibendum elit eget erat. Aliquam erat volutpat. Nullam rhoncus aliquam metus. Etiam egestas wisi a erat. Vivamus ac leo pretium faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque pretium lectus id turpis.',
            'book_cover_path' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1360095966l/11125.jpg',
            'code' => '123-4567-89-8',
            'published_at' => '1998',
        ]);
        $book->authors()->attach([7]);
        $book->genres()->attach([9, 10]);
    }
}
