<?php
/**
 * Created by PhpStorm.
 * User: hamzeh
 * Date: 11/27/2019
 * Time: 2:50 PM
 */

use PHPUnit\Framework\TestCase;

class ArticlesTest extends TestCase
{

    protected $client;

    public function test_it_can_add_article()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost'
        ]);

        $data = [
            'title' => 'Sherlock Holmes',
            'content' => 'Jem Moriaty',
            'user_id' => '1',
            'category' => 'action'
        ];

        $response = $this->client->post('/article/add', [
            'json' => $data
        ]);

        $this->assertEquals(200, $response->getStatusCode());

        $this->assertNotNull($data);
    }

    public function test_show_articles()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost'
        ]);

        $response = $this->client->get('/article/all');

        $this->assertEquals(200, $response->getStatusCode());

        $data = json_decode($response->getBody(), true);

        $this->assertNotNull($data);
    }

    public function test_delete()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost'
        ]);

        $response = $this->client->get('/article/remove/1');
        $this->assertEquals(200, $response->getStatusCode());
    }
}