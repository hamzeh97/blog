<?php
/**
 * Created by PhpStorm.
 * User: hamzeh
 * Date: 11/27/2019
 * Time: 5:15 AM
 */

use PHPUnit\Framework\TestCase;

class UsersTest extends TestCase
{

    protected $client;

    public function test_it_can_add_user()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost'
        ]);

        $data = [
            'username' => 'hamzeh97',
            'email' => 'hqutishat97@gmail.com',
            'password' => '12341234',
            'first_name' => 'hamzeh',
            'last_name' => 'qutishat'
        ];

        $response = $this->client->post('/users/add', [
            'json' => $data
        ]);

        $this->assertEquals(200, $response->getStatusCode());

        $this->assertNotNull($data);
    }

    public function test_show_users()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost'
        ]);

        $response = $this->client->get('/users/all');

        $this->assertEquals(200, $response->getStatusCode());

        $data = json_decode($response->getBody(), true);

        $this->assertNotNull($data);
    }

    public function test_delete()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost'
        ]);

        $response = $this->client->get('/users/remove/1');
        $this->assertEquals(200, $response->getStatusCode());
    }
}