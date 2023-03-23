<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BFSTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_bfs(): void
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/get_bfs');
        $response->assertStatus(200);
        $response->assertJson([]);

    }
}
