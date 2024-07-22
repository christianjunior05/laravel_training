<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author; 

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Napoleon Hill',
            'email' => 'napoleon@example.com',
        ]);

        Author::create([
            'name' => 'Robert Kiyosaki',
            'email' => 'robert@example.com',
        ]);


    }
}