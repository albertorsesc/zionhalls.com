<?php

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
        Schema::create('influencers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('known_as')->nullable();
            $table->text('bio')->nullable();
            $table->string('profile_image');
            $table->string('banner_image');
            $table->string('country_location'); // 2-letter country code
            $table->string('country_origin'); // 2-letter country code
            $table->string('country_raised')->nullable(); // 2-letter country code
            $table->string('estimated_networth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('influencers');
    }
};
