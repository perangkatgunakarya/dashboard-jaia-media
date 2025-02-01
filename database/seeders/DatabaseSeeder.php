<?php

namespace Database\Seeders;

use App\Models\OwnedVenueTestimonial;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            HomeSeeder::class,
            SegmentSeeder::class,
            SegmentTestimonialSeeder::class,
            ClientSeeder::class,
            OwnedVenueSeeder::class,
            OwnedVenueTestimonialSeeder::class,
        ]);
    }
}
