<?php

namespace Database\Seeders;

use App\Models\Segment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Segment::create([
            'name' => 'Media Consulting'
        ]);
        Segment::create([
            'name' => 'Bussiness Consulting'
        ]);
        Segment::create([
            'name' => 'Operating The Bussiness'
        ]);
    }
}
