<?php

namespace Tests\Feature\Hall;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SubmitHandleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @throws \Throwable
    */
    public function guest_can_submit_handle()
    {
        $this->markTestSkipped();
    }
}
