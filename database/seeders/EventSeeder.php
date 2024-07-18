<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i =0; $i<=5; $i++) {
            \App\Models\Event::create([
                'title' => 'Event '.$i,
                'description' => 'This is a description for the event '.$i,
                'event_date' => now()->addDay(1),
                'event_time' => now()->addHours(2),
                'location' => 'Palais de la culture',
                'price' => 10000,
                'image' => 'image_'.$i.'.jpg',
                'category_id' => rand(1, 10),
                'user_id' => rand(1, 2),
            ]);
        }
    }
}