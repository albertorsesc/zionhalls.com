<?php

namespace Tests\Feature\Influencers;

use App\Models\Influencers\Influencer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InfluencersTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @throws \Throwable
    */
    public function guest_can_visit_enter_the_halls_page()
    {
        $this->get(route('hall'))->assertOk();
    }

    /**
     * @test
     * @throws \Throwable
    */
    public function guest_can_visit_influencer_profile_page()
    {
        $influencer = $this->create(Influencer::class);

        $this->get(route('influencers.show', $influencer))->assertOk();
    }
}
