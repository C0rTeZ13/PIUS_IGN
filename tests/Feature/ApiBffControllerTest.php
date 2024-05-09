<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiBffControllerTest extends TestCase
{
    /**
     * Test redirect method with valid request data.
     *
     * @return void
     */
    public function testRedirectGetNewsWithValidData()
    {
        $requestData = [
            'method' => 'GET',
            'route' => 'news_show',
        ];

        $response = $this->postJson('/api', $requestData);
        $response->assertStatus(200);
    }

    public function testRedirectPostNewsWithValidData()
    {
        $requestData = [
            'method' => 'POST',
            'route' => 'news_store',
        ];

        $response = $this->postJson('/api', $requestData);
        $response->assertStatus(200);
    }

    public function testRedirectPutWithValidData()
    {
        $requestData = [
            'method' => 'GET',
            'route' => 'news_show',
        ];

        $response = $this->postJson('/api', $requestData);
        $response->assertStatus(200);
    }

    /**
     * Test redirect method with invalid request data.
     *
     * @return void
     */
    public function testRedirectWithInvalidData()
    {
        $requestData = [
            // Missing required request data here
        ];

        $response = $this->postJson('/api', $requestData);

        $response->assertStatus(404)
            ->assertJson(['error' => 'Ошибка: не удалось определить тип запроса или маршрут.']);
    }
}
