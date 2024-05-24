<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function testCreateUser(): void
    {
        $response = $this->post('/api/users', [
            'email' => 'test@test.com',
            'password' => '123',
        ]);

        $response->assertStatus(201);
    }
}
