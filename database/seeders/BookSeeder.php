<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::create([
            'title' => 'The Great Gatsby',
            'price' => 10.99,
        ]);
        Book::create([
            'title' => 'To Kill a Mockingbird',
            'price' => 12.99,
        ]);
    }
}
