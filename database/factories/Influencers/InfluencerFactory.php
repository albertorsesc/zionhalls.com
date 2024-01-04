<?php

namespace Database\Factories\Influencers;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'name' => $this->faker->name,
            'known_as' => $this->faker->name,
            'x_handle' => '@' . $this->faker->name,
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
