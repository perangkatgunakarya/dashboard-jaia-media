<?php

namespace Database\Seeders;

use App\Models\Segment;
use App\Models\SegmentTestimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SegmentTestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $businessConsulting = Segment::where('name', 'Business Consulting')->first()->id;
        $operatingTheBusiness = Segment::where('name', 'Operating The Business')->first()->id;



        $businessConsultingTestimonials = [
            [
                'segment_id' => $businessConsulting,
                'testimonial' => 'Launching Mallika SOC jadi booming gara-gara ide-ide kreatif dari mereka. Keren banget pokoknya!',
                'name' => 'Rini Pramesty',
                'origin' => 'Mallika',
                'rating' => 5,
            ],

            [
                'segment_id' => $businessConsulting,
                'testimonial' => 'Tim ini jago banget! Berkat mereka, Han’s Coffee makin dikenal dan rame terus.',
                'name' => 'Andri',
                'origin' => 'Han’s Coffee',
                'rating' => 5,
            ],

            [
                'segment_id' => $businessConsulting,
                'testimonial' => 'Momschik kini menjadi tempat favorit di Wonogiri! Strategi branding yang mereka berikan benar-benar mengubah segalanya."',
                'name' => 'Laela Kefasya',
                'origin' => 'Momschik',
                'rating' => 5,
            ],
        ];

        foreach ($businessConsultingTestimonials as $testimonial) {
            SegmentTestimonial::create($testimonial);
        }
        $operatingTheBusinessTestimonials = [
            [
                'segment_id' => $operatingTheBusiness,
                'name' => 'Ardiansyah',
                'origin' => 'Night Owl’s',
                'rating' => 5,
                'testimonial' => 'Night Owl’s makin terorganisir dan rame setelah tim ini bantu optimalin operasional kami. Hasilnya terasa banget',
            ],

            [
                'segment_id' => $operatingTheBusiness,
                'name' => 'Rini Pramesty',
                'origin' => 'Mallika',
                'rating' => 5,
                'testimonial' => 'Dari awal operasional sampai branding, mereka bikin semuanya jadi smooth. Mallika SOC langsung jadi favorit orang-orang.',
            ],

            [
                'segment_id' => $operatingTheBusiness,
                'name' => 'Fajar',
                'origin' => 'Cepad Makan',
                'rating' => 5,
                'testimonial' => 'Tim ini bener-bener detail soal operasional. Cepad Makan SOC jadi lebih efisien dan atmosfernya makin nyaman buat pelanggan.',
            ],
        ];

        foreach ($operatingTheBusinessTestimonials as $testimonial) {
            SegmentTestimonial::create($testimonial);
        }
    }
}
