<?php

namespace Database\Seeders;

use App\Models\OwnedVenue;
use App\Models\OwnedVenueTestimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnedVenueTestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownedVenue = OwnedVenue::first()->id;

        $testimonials = [
            [
                'owned_venue_id' => $ownedVenue,
                'name' => 'Andi Pratama',
                'origin' => 'Jakarta',
                'rating' => 5,
                'testimonial' => 'Business consulting services helped improve company efficiency and growth through expert analysis and practical solutions',
            ],
            [
                'owned_venue_id' => $ownedVenue,
                'name' => 'Rina Wijaya',
                'origin' => 'Bandung',
                'rating' => 5,
                'testimonial' => 'Business consulting services enhance company efficiency and growth through expert analysis and practical solutions',
            ],
            [
                'owned_venue_id' => $ownedVenue,
                'name' => 'Dewi Lestari',
                'origin' => 'Surabaya',
                'rating' => 5,
                'testimonial' => 'By offering expert analysis and actionable strategies, consulting services help businesses improve efficiency and achieve growth.',
            ],
            [
                'owned_venue_id' => $ownedVenue,
                'name' => 'Budi Santoso',
                'origin' => 'Malang',
                'rating' => 5,
                'testimonial' => 'Consulting services for businesses improve operational efficiency and foster growth by providing expert analysis and actionable solutions',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            OwnedVenueTestimonial::create($testimonial);
        }
    }
}
