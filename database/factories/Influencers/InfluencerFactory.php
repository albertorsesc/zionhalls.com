<?php

namespace Database\Factories\Influencers;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Influencers\Influencer>
 */
class InfluencerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->name;
        return [
            'name' => $this->faker->name,
            'known_as' => $name,
            'x_handle' => '@' . Str::camel($name),
            'official_website' => $this->faker->url,
            'bio' => $this->faker->text,
            'quote' => $this->faker->text,
            'profile_image' => $this->faker->imageUrl(),
            'banner_image' => $this->faker->imageUrl(),
            'country_location' => $this->faker->countryCode,
            'country_origin' => $this->faker->countryCode,
            'country_raised' => $this->faker->countryCode,
            'estimated_networth' => '$' . $this->faker->randomFloat(2, 0, 1000000) . 'M',
        ];
    }
}
