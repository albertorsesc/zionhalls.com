<?php

namespace Database\Seeders;

use App\Models\Influencers\Influencer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfluencerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $influencers = [
            [
                /*'badges_of_valor' => [
                    'business',
                    'fitness',
                    'masculinity',
                    'mindset',
                ],*/
                'name' => 'Andrew Tate',
                'known_as' => 'Cobratate',
                'bio' => 'Top G',
                'profile_image' => 'https://pbs.twimg.com/profile_images/1728837013023895552/nCHrdjlh_400x400.jpg',
                'banner_image' => 'https://pbs.twimg.com/profile_images/1540561709211033602/e3wWYJsp_400x400.jpg',
                'country_location' => 'Romania',
                'country_origin' => 'US',
                'country_raised' => 'UK',
                'estimated_networth' => '$1B'
            ],
            [
                'name' => 'Luke Belmar',
                'known_as' => 'Luke Belmar',
                'bio' => 'Belmar runs a collective called the Capital Club, which he aims to transform into the largest
                decentralized entrepreneurial network that focuses on building, multiplying, and preserving wealth.
                He is also involved in private equity. His estimated net worth is $10 million, although the exact
                figure is not known. He made his fortune from digital advertising, e-commerce, drop shipping, and
                investing in crypto and NFTs.',
                'profile_image' => 'https://pbs.twimg.com/profile_images/1540561709211033602/e3wWYJsp_400x400.jpg',
                'banner_image' => '',
                'country_location' => 'US',
                'country_origin' => 'AR',
                'country_raised' => 'AR',
                'estimated_networth' => '$10M'
            ]
        ];

        Influencer::insert($influencers);
    }
}
