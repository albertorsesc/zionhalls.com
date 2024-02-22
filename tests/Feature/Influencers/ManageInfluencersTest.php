<?php

namespace Tests\Feature\Influencers;

use App\Models\Influencers\Influencer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ManageInfluencersTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @throws \Throwable
    */
    public function root_user_can_visit_manage_influencers_page()
    {
        $this->signInAsRoot();

        $this->get(route('influencers.index'))->assertOk();

        $this->signIn();

        $response = $this->get(route('influencers.index'));
        $response->assertRedirectToRoute('dashboard');
    }

    /**
     * @test
     * @throws \Throwable
     */
    public function root_user_can_visit_create_influencers_page()
    {
        $this->signInAsRoot();

        $this->get(route('influencers.create'))->assertOk();

        $this->signIn();

        $response = $this->get(route('influencers.create'));
        $response->assertRedirectToRoute('dashboard');
    }

    /**
     * @test
     * @throws \Throwable
     */
    public function root_user_can_store_a_new_influencer()
    {
        $this->signInAsRoot();

        $newInfluencer = $this->make(Influencer::class);

        $this->post(route('influencers.store'), $newInfluencer->toArray());
        $this->assertDatabaseHas('influencers', [
            'name' => $newInfluencer->name,
        ]);

        $this->signIn();

        $this->post(
            route('influencers.store'),
            $this->make(Influencer::class)->toArray()
        )->assertRedirectToRoute('dashboard');
    }
}
