<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $author1 = Author::where('email', 'napoleon@example.com')->first();
        $author2 = Author::where('email', 'robert@example.com')->first();

        Book::create([
            'title' => 'Plus malin que le diable',
            'summary' => 'Summary of book one',
            'author_id' => $author1->id,
        ]);

        Book::create([
            'title' => 'Pere riche pere pauvre ',
            'summary' => 'Summary of book two',
            'author_id' => $author2->id,
        ]);

        Book::create([
            'title' => 'Reflechissez et devenez riche ',
            'summary' => 'Summary of book three',
            'author_id' => $author1->id,
        ]);
    }


}
