<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jaia Media Consultant',
            'email' => 'Jaiamediaconsultant@gmail.com',
            'password' => bcrypt('Jaiamedia#1')
        ]);
    }
}
