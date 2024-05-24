<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TransactionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function testCreateTransaction(): void
    {
        $this->post('/api/users', [
            'email' => 'test@test.com',
            'password' => '123',
        ]);

        $response = $this->post('/api/transactions', ['employee_id' => 1, 'hours' => 12]);

        $response->assertStatus(201);
    }

    public function testGetTransactions(): void
    {
        $this->post('/api/users', [
            'email' => 'test@test.com',
            'password' => '123',
        ]);

        $this->post('/api/transactions', ['employee_id' => 2, 'hours' => 12]);

        $response = $this->get('/api/transactions');
        $response->assertStatus(200)->assertJson([
            [
                "2" => "3600"
            ]
        ]);
    }

    public function testDestroyTransaction(): void
    {
        $this->post('/api/users', [
            'email' => 'test@test.com',
            'password' => '123',
        ]);

        $this->post('/api/transactions', ['employee_id' => 3, 'hours' => 12]);

        $response = $this->get('/api/transactions');
        $response->assertStatus(200)->assertJson([
            [
                "3" => "3600"
            ]
        ]);

        $response = $this->delete('/api/transactions');
        $response->assertStatus(204);
    }

}
