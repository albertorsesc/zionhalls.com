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
                'known_as' => 'TopG/Cobratate',
                'x_handle' => '@Cobratate',
                'quote' => '“My Unmatched Perspicacity Coupled With My Sheer Indefatigability Makes Me a Feared
                Opponent in Any Realm of Human Endeavor”',
                'bio' => "Andrew Tate, a four-time kickboxing world champion, has carved a remarkable path as an
                entrepreneur. He's taken his fighting spirit from the ring to the business world, crafting an empire
                that spans digital media to real estate. His journey is a testament to transforming hard work and
                resilience into success. Known for his emphasis on fitness and mental acuity, Tate is a source of
                real-world wisdom on thriving against the odds. His dynamic approach to life inspires many to ignite
                their inner fire and hustle towards their dreams.",
                'profile_image' => 'https://pbs.twimg.com/profile_images/1728837013023895552/nCHrdjlh_400x400.jpg',
                'banner_image' => 'https://pbs.twimg.com/profile_banners/333357345/1701021840/1500x500',
                'country_location' => 'Romania',
                'country_origin' => 'US',
                'country_raised' => 'UK',
                'estimated_networth' => '$1B'
            ],
            [
                /*'badges_of_valor' => [
                    'business',
                    'fitness',
                    'masculinity',
                    'mindset',
                ],*/
                'name' => 'Tristan Tate',
                'known_as' => 'The Talisman',
                'x_handle' => '@TateTheTalisman',
                'quote' => '“Fortune favours the prepared mind.”',
                'bio' => "Tristan Tate, former European kickboxing champion and brother to Andrew Tate, is a man of
                thrill and success. Known for his sharp wit and love for luxury cars, Tristan has seamlessly
                transitioned from sports to a successful business career. His lifestyle, filled with victories and
                adventures, inspires many to pursue success and live life on their own terms.",
                'profile_image' => 'https://pbs.twimg.com/profile_images/1723734816506482688/dICo01oi_400x400.jpg',
                'banner_image' => 'https://pbs.twimg.com/profile_banners/2237865246/1700172498/1500x500',
                'country_location' => 'Romania',
                'country_origin' => 'US',
                'country_raised' => 'UK',
                'estimated_networth' => '$1B'
            ],
            [
                'name' => 'Luke Belmar',
                'known_as' => 'Luke Belmar',
                'x_handle' => '@lukebelmar',
                'quote' => '“Broke is a condition of the mind not the pocket.
                 Fix your mind the rest will take care of itself.”',
                'bio' => 'Belmar runs a collective called the Capital Club, which he aims to transform into the largest
                decentralized entrepreneurial network that focuses on building, multiplying, and preserving wealth.
                He is also involved in private equity. His estimated net worth is $10 million, although the exact
                figure is not known. He made his fortune from digital advertising, e-commerce, drop shipping, and
                investing in crypto and NFTs.',
                'profile_image' => 'https://pbs.twimg.com/profile_images/1540561709211033602/e3wWYJsp_400x400.jpg',
                'banner_image' => 'https://www.capital.club/assets/img/nav-logo.svg',
                'country_location' => 'US',
                'country_origin' => 'AR',
                'country_raised' => 'AR',
                'estimated_networth' => '$10M'
            ]
        ];

        Influencer::insert($influencers);
    }
}
