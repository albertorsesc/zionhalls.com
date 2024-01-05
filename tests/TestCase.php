<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function signIn(array $attributes = [], $user = null, string $driver = null) : TestCase
    {
        $user ??= $this->create(User::class, $attributes);

        return $this->actingAs($user, $driver);
    }

    public function signInAsRoot() : TestCase
    {
        return $this->signIn([
            'email' => config('auth.roles.root')[0]
        ]);
    }

    /**
     * Factory wrapper.
     * Reasoning: Factories tend to change through Laravel versions,
     * instead of refactoring all tests, we can just change the method here.
     */
    public function create($class, array $attributes = [])
    {
        return $class::factory()->create($attributes);
    }

    /**
     * Factory wrapper.
     * Reasoning: Factories tend to change through Laravel versions,
     * instead of refactoring all tests, we can just change the method here.
     */
    public function make($class, array $attributes = [])
    {
        return $class::factory()->make($attributes);
    }
}
