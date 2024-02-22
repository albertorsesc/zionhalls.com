<?php

namespace Tests\Feature\Influencers;

use App\Enums\InfluencerSuggestionStatusEnum;
use App\Models\Influencers\Influencer;
use App\Models\Influencers\InfluencerSuggestion;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Inertia\Testing\AssertableInertia;
use Tests\TestCase;

class SuggestInfluencerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @throws \Throwable
     */
    public function guest_can_visit_suggest_an_influencer_page()
    {
        $response = $this->get(route('influencers.suggestions.create'));
        $response->assertOk();
        $response->assertInertia(fn (AssertableInertia $page) =>
            $page->component('Influencers/Suggestions/Create')
        );
    }

    /**
     * @test
     * @throws \Throwable
    */
    public function guest_can_suggest_an_influencer_for_approval()
    {
        $suggestedInfluencer = $this->make(Influencer::class);

        $response = $this->post(route('influencers.suggestions.store'), $suggestedInfluencer->toArray());
        $response->assertRedirect(route('hall'));

        $this->assertDatabaseHas('influencer_suggestions', [
            'status' => InfluencerSuggestionStatusEnum::Pending,
            'user_id' => null,
            'approved_at' => null,
            'rejected_at' => null,
            'rejected_reason' => null,

            'name' => $suggestedInfluencer->name,
            'known_as' => $suggestedInfluencer->known_as,
            'x_handle' => $suggestedInfluencer->x_handle,
            'bio' => $suggestedInfluencer->bio,
            'quote' => $suggestedInfluencer->quote,
            'profile_image' => $suggestedInfluencer->profile_image,
            'banner_image' => $suggestedInfluencer->banner_image,
            'country_location' => $suggestedInfluencer->country_location,
            'country_origin' => $suggestedInfluencer->country_origin,
            'country_raised' => $suggestedInfluencer->country_raised,
            'estimated_networth' => $suggestedInfluencer->estimated_networth,
        ]);
    }

    /**
     * @test
     * @throws \Throwable
     */
    public function guest_can_suggest_an_influencer_by_only_x_handle()
    {
        $suggestedInfluencer = $this->make(Influencer::class);

        $response = $this->post(route('influencers.suggestions.store'), [
            'x_handle' => $suggestedInfluencer->x_handle,
        ]);
        $response->assertRedirect(route('hall'));

        $this->assertDatabaseHas('influencer_suggestions', [
            'status' => InfluencerSuggestionStatusEnum::Pending,
            'user_id' => null,
            'approved_at' => null,
            'rejected_at' => null,
            'rejected_reason' => null,

            'name' => null,
            'known_as' => null,
            'x_handle' => $suggestedInfluencer->x_handle,
            'bio' => null,
            'quote' => null,
            'profile_image' => null,
            'banner_image' => null,
            'country_location' => null,
            'country_origin' => null,
            'country_raised' => null,
            'estimated_networth' => null,
        ]);
    }

    /**
     * @test
     * @throws \Throwable
     */
    public function guest_can_suggest_an_influencer_by_x_handle_with_or_without_at_symbol()
    {
        // without @ symbol
        $suggestedInfluencer = $this->make(Influencer::class, [
            'x_handle' => fake()->userName,
        ]);

        $response = $this->post(route('influencers.suggestions.store'), [
            'x_handle' => $suggestedInfluencer->x_handle,
        ]);
        $response->assertRedirect(route('hall'));

        $this->assertDatabaseHas('influencer_suggestions', [
            'x_handle' => '@' . $suggestedInfluencer->x_handle,
        ]);
        $this->assertEquals(
            '@' . $suggestedInfluencer->x_handle,
            InfluencerSuggestion::first()->x_handle
        );

        // with @ symbol
        $suggestedInfluencer = $this->make(Influencer::class);
        $response = $this->post(route('influencers.suggestions.store'), [
            'x_handle' => $suggestedInfluencer->x_handle,
        ]);
        $response->assertRedirect(route('hall'));

        $this->assertDatabaseHas('influencer_suggestions', [
            'x_handle' => $suggestedInfluencer->x_handle,
        ]);
        $this->assertStringContainsString(
            '@',
            InfluencerSuggestion::latest()->first()->x_handle
        );
        $this->assertEquals(1, Str::substrCount(
            InfluencerSuggestion::latest()->first()->x_handle, '@')
        );
    }

    /**
     * @test
     * @throws \Throwable
     */
    public function guest_can_suggest_an_influencer_by_only_x_handle_with_only_one_at_symbol()
    {
        $suggestedInfluencer = $this->make(Influencer::class, [
            'x_handle' => '@@' . fake()->userName,
        ]);

        $response = $this->post(route('influencers.suggestions.store'), [
            'x_handle' => $suggestedInfluencer->x_handle,
        ]);
        $response->assertRedirect(route('hall'));

        $this->assertDatabaseHas('influencer_suggestions', [
            'x_handle' => '@' . Str::remove('@', $suggestedInfluencer->x_handle),
        ]);
        $this->assertStringContainsString(
            '@',
            InfluencerSuggestion::latest()->first()->x_handle
        );
        $this->assertEquals(1, Str::substrCount(
            InfluencerSuggestion::latest()->first()->x_handle, '@')
        );
    }

    /**
     * @test
     * @throws \Throwable
    */
    public function root_user_can_visit_manage_influencer_suggestions()
    {
        $this->signInAsRoot();

        $response = $this->get(route('influencers.suggestions.index'));
        $response->assertOk();
        $response->assertInertia(fn (AssertableInertia $page) =>
            $page->component('Influencers/Suggestions/Index')
        );
    }
}
