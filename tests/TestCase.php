<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

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
