<?php

namespace Database\Seeders;

use App\Models\OwnedVenue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnedVenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OwnedVenue::create(
            [
                'name' => 'Padma',
                'slug' => 'padma',
                'logo_url' => 'venue/padma/padma-white-logo.png',
                'jumbotron_url' => 'venue/padma/padma-jumbotron.jpg',
                'overview_text' => 'Experience unique flavors with our ever-evolving seasonal menu, offering authentic taste in a warm, family-friendly atmosphereExperience unique flavors with our ever-evolving seasonal menu, offering authentic taste in a warm, family-friendly atmosphere.',
                'overview_image_url' => 'venue/padma/padma-overview.jpg',
                'galleries' => [
                    'venue/padma/gallery/gallery1.jpg',
                    'venue/padma/gallery/gallery2.jpg',
                    'venue/padma/gallery/gallery3.jpg',
                ],
                'monthly_customer' => 500,
                'daily_revenue' => 8.5,
            ]
        );
    }
}
