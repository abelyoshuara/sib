<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Belajar Laravel',
                'author' => 'putu',
                'year' => 2002,
                'description' => 'asfd asdf',
            ],
            [
                'title' => 'Belajar HTML',
                'author' => 'kadek',
                'year' => 2025,
                'description' => 'contoh saja',
            ],
        ]);
    }
}
