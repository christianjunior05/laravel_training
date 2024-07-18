<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Music', 'Sport', 'Theatre', 'Cinema', 'Art', 'Literature', 'Science', 'Technology', 'Business', 'Politics'];

        foreach($categories as $category) {
            Category::create([
                'name' => $category,
                "description" => "This is a description for the $category category."
            ]);
        }
    }
}