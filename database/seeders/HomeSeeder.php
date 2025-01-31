<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Home::create([
            'years_of_expertise' => 50,
            'successful_campaigns' => 1000,
            'served_clients' => 23,
            'positive_testimonials' => 80,
        ]);
    }
}
