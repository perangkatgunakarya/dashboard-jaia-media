<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Segment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mediaConsulting = Segment::where('name', 'Media Consulting')->first();
        $businessConsulting = Segment::where('name', 'Business Consulting')->first();
        $operatingTheBusiness = Segment::where('name', 'Operating The Business')->first();

        $mediaConsultingClient = [
            [
                'background_url' => '/client/logo-background/pion-potrait.png',
                'logo_url' => 'client/logo/pion-logo.png',
                'name' => 'PION KTV',
                'socmed_url' => 'https://www.instagram.com/pionktv/',
                'description' => 'Pion Karaoke became a social media sensation through creative strategies, hitting 5 million Instagram views—no ads needed. This highlights how storytelling and smart digital tactics can boost engagement and elevate your brand.'
            ],
            [
                'background_url' => '/client/logo-background/lava-potrait.png',
                'logo_url' => 'client/logo/lava-3d-logo.png',
                'name' => 'lava Bar & Kitchen',
                'socmed_url' => 'https://www.instagram.com/lavabarandkitchen',
                'description' => 'Lava Bar and Kitchen in Solo offers luxury ambiance and culinary. Enjoy fine dining or vibrant nightlife in this premium destination. Discover its charm through creative, high-quality content. Redefine premium entertainment and dining in Solo!'
            ],
            [
                'background_url' => '/client/logo-background/koito-batuga-potrait.jpg',
                'logo_url' => 'client/logo/koito-logo.png',
                'name' => 'Koito Batuga',
                'socmed_url' => 'https://www.instagram.com/koito.batuga/',
                'description' => 'Koito Batuga enchants Wonogiri with its magical vibe and exquisite cuisine. From scratch, we grew its Instagram to 11,000+ followers using creative content and smart strategies, establishing it as a go-to spot for unforgettable dining experiences.'
            ],
            [
                'background_url' => '/client/logo-background/ify-potrait.png',
                'logo_url' => 'client/logo/ify-logo.png',
                'name' => 'IFY KTV',
                'socmed_url' => 'https://www.instagram.com/ifyktv/',
                'description' => 'Ify Karaoke, a popular spot in Boyolali and part of the Pion group. With consistent uploads and smart strategies, we optimized Instagram’s algorithm, hitting 1.2 million views. Our expertise drives brand growth through impactful digital tactics.',
            ],
            [
                'background_url' => '/client/logo-background/padmasoc-potrait.jpg',
                'logo_url' => 'client/logo/padmasoc-white-logo.png',
                'name' => 'Padma SOC',
                'socmed_url' => 'https://www.instagram.com/padmasoc/',
                'description' => 'Part of Jaia Establishment, Padma SOC has captured attention from the start. With the right media strategy, it achieved 150,000 interactions, proving the power of our creative approach to building a strong brand from the ground up.'
            ],
            [
                'name' => 'Rominsy Jeans',
                'logo_url' => 'client/logo/romin-logo.png',
                'background_url' => '',
                'socmed_url' => 'https://instagram.com/rominsyjeans_',
                'description' => 'This is a dummy description'
            ],
            [
                'name' => 'Riverhill Tawangmangu',
                'logo_url' => 'client/logo/river-logo.png',
                'background_url' => '',
                'socmed_url' => 'https://instagram.com/riverhill.tawangmangu',
                'description' => 'This is a dummy description'
            ],
            [
                'name' => 'MRCL Coffee Studio',
                'logo_url' => 'client/logo/mrcl-logo.png',
                'background_url' => '',
                'socmed_url' => 'https://instagram.com/mrclcoffeestudio',
                'description' => 'This is a dummy description'
            ],
            [
                'name' => 'Atlantis SOC',
                'logo_url' => 'client/logo/atlantis-logo.png',
                'background_url' => '',
                'socmed_url' => 'https://instagram.com/atlantis_soc',
                'description' => 'This is a dummy description'
            ],
            [
                'name' => 'Wahana Soko Alas',
                'logo_url' => 'client/logo/wahana-soko-logo.png',
                'background_url' => '',
                'socmed_url' => 'https://instagram.com/wahanasokoalas',
                'description' => 'This is a dummy description'
            ],
            [
                'name' => 'Djiwa Jawa',
                'logo_url' => 'client/logo/djiwa-djawa-logo.png',
                'background_url' => '',
                'socmed_url' => 'https://instagram.com/djiwa_jawa',
                'description' => 'This is a dummy description'
            ],
            [
                'name' => 'Ivory Sport Bar Grill',
                'logo_url' => 'client/logo/ivory-logo.png',
                'background_url' => '',
                'socmed_url' => 'https://instagram.com/ivorysportsbargrill',
                'description' => 'This is a dummy description'
            ],
            [
                'name' => 'Solo International Mini Soccer',
                'logo_url' => 'client/logo/mini-soccer-logo.png',
                'background_url' => '',
                'socmed_url' => 'https://instagram.com/solointernationalminisoccer',
                'description' => 'This is a dummy description'
            ],
            [
                'name' => 'Excellent Swim Academy',
                'logo_url' => 'client/logo/excellent-logo.png',
                'background_url' => '',
                'socmed_url' => 'https://instagram.com/excellentswimacademy',
                'description' => 'This is a dummy description'
            ],
            [
                'name' => 'AXL Coffe',
                'logo_url' => 'client/logo/axl-logo.png',
                'background_url' => '',
                'socmed_url' => 'https://instagram.com/axlcoffee',
                'description' => 'This is a dummy description'
            ],
        ];
        foreach ($mediaConsultingClient as $item) {
            Client::create($item)->segments()->attach([$mediaConsulting->id]);
        }

        $businessConsultingClient = [
            [
                'name' => 'Momschik',
                'logo_url' => 'client/logo/momschick-logo.png',
                'background_url' => 'client/logo-background/momschick-potrait.jpg',
                'socmed_url' => 'https://www.instagram.com/momschikeateryspace',
                'description' => 'Momschik Eatery and Space in Wonogiri combines premium coffee with a cozy vibe. We’ve elevated its brand through strategic insights, making it a standout in the culinary scene. Discover top-tier coffee and smart business strategy in one place!',
            ],

            [
                'name' => 'Han Coffee & Eatery',
                'logo_url' => 'client/logo/hans-logo.png',
                'background_url' => 'client/logo-background/hans-potrait.jpg',
                'socmed_url' => 'https://www.instagram.com/hanscoffeeeatery',
                'description' => 'Located in Gemolong, Han’s Coffee and Eatery blends unique concepts with quality flavors. Through our media and business consulting, we’ve helped enhance their branding and optimize business strategies, driving growth in the F&B industry.',
            ],

            [
                'name' => 'Mallika',
                'logo_url' => 'client/logo/malika-logo.png',
                'background_url' => 'client/logo-background/malika-potarit.jpg',
                'socmed_url' => 'https://instagram.com/mallika.soc',
                'description' => 'Mallika SOC, a branch of Padma SOC, delivers a cozy brunch experience. With our creative approach, it’s taken the digital world by storm, creating buzz since launch. Our branding strategy has made it a beloved brunch destination for many.',
            ],

            [
                'name' => 'Cepad Makan',
                'logo_url' => 'client/logo/cepadmakansoc-logo.png',
                'background_url' => 'client/logo-background/cepadmakansoc-potrait.png',
                'socmed_url' => 'https://instagram.com/cepadmakansoc',
                'description' => 'Cepad Makan SOC, a sister brand of Padma SOC, serves the same exceptional menu with a fresh twist. We’ve crafted the brand with consistency, ensuring quality and top culinary experiences. Enjoy Padma’s flavors in a vibrant new setting.',
            ]
        ];
        foreach ($businessConsultingClient as $item) {
            Client::create($item)->segments()->attach([$businessConsulting->id]);
        }

        $operatingTheBusinessClient = [
            [
                'name' => 'Nightowls.id',
                'logo_url' => 'client/logo/nightowls-logo.png',
                'background_url' => 'client/logo-background/nightowls-potrait.jpg',
                'socmed_url' => 'https://www.instagram.com/nightowls.id',
                'description' => 'Night Owl’s, with its spacious layout and prime location, is the perfect place to gather. We’ve helped optimize its operations and digital strategy, boosting its standing as a top coffeeshop in the area.',
            ],

            [
                'name' => 'Malika',
                'logo_url' => 'client/logo/malika-logo.png',
                'background_url' => 'client/logo-background/malika-potarit.jpg',
                'socmed_url' => 'https://www.instagram.com/malika.soc/',
                'description' => 'Mallika SOC, a branch of Padma SOC, offers a cozy brunch experience. Our creative approach has made it a digital sensation, creating buzz since launch. With a winning branding strategy, it’s now a top brunch favorite for many.',
            ],

            [
                'name' => 'Cepad Makan',
                'logo_url' => 'client/logo/cepadmakansoc-logo.png',
                'background_url' => 'client/logo-background/cepadmakansoc-potrait.png',
                'socmed_url' => 'https://www.instagram.com/cepadmakansoc/',
                'description' => 'Cepad Makan SOC, a sister brand of Padma SOC, delivers the same great menu with a fresh vibe. We’ve built the brand with consistency, ensuring quality and top culinary experiences. Enjoy Padma’s flavors in a new, inviting atmosphere.',
            ],
        ];

        foreach ($operatingTheBusinessClient as $item) {
            Client::create($item)->segments()->attach([$operatingTheBusiness->id]);
        }
    }
}
