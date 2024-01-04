<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private array $seeders = [
        InfluencerSeeder::class,
    ];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call($this->seeders);
    }
}
