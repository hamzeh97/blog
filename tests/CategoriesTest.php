<?php
/**
 * Created by PhpStorm.
 * User: hamzeh
 * Date: 11/27/2019
 * Time: 2:50 PM
 */

use PHPUnit\Framework\TestCase;

class CategoriesTest extends TestCase
{

    protected $client;

    public function test_it_can_add_category()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost'
        ]);

        $data = [
            'category' => 'Action',
        ];

        $response = $this->client->post('/category/add', [
            'json' => $data
        ]);

        $this->assertEquals(200, $response->getStatusCode());

        $this->assertNotNull($data);
    }

    public function test_show_categories()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost'
        ]);

        $response = $this->client->get('/category/all');

        $this->assertEquals(200, $response->getStatusCode());

        $data = json_decode($response->getBody(), true);

        $this->assertNotNull($data);
    }

    public function test_delete()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost'
        ]);

        $response = $this->client->get('/category/remove/1');
        $this->assertEquals(200, $response->getStatusCode());
    }
}