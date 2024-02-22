<?php

    use App\Enums\InfluencerSuggestionStatusEnum;
    use App\Models\User;
    use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('influencer_suggestions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->nullable();
            $table->string('known_as')->nullable();
            $table->string('x_handle')->unique();
            $table->string('official_website')->nullable();
            $table->text('bio')->nullable();
            $table->text('quote')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('country_location')->nullable(); // 2-letter country code
            $table->string('country_origin')->nullable(); // 2-letter country code
            $table->string('country_raised')->nullable(); // 2-letter country code
            $table->string('estimated_networth')->nullable();
            $table->string('status', 30)->default(InfluencerSuggestionStatusEnum::Pending);
            $table->foreignIdFor(User::class)->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('rejected_at')->nullable();
            $table->text('rejected_reason')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('influencer_suggestions');
    }
};
