<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClientsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guests_cannot_view_clients()
    {
        // list
        $this->get('/clients')->assertRedirect('login');

        // single
        $client = factory('App\Client')->create();
        $this->get($client->path())->assertRedirect('login');
    }

    /** @test */
    public function a_user_can_view_a_list_of_clients()
    {
        $this->be(factory('App\User')->create());
        $clients = factory('App\Client', 3)->create();
        $this->get('/clients')
            ->assertSee($clients[0]['name'])
            ->assertSee($clients[0]['notes'])
            ->assertSee($clients[1]['name'])
            ->assertSee($clients[2]['name']);
    }

    /** @test */
    public function a_user_can_view_a_client()
    {
        $this->be(factory('App\User')->create());
        $client = factory('App\Client')->create();
        $this->get($client->path())
            ->assertSee($client->name)
            ->assertSee($client->notes);
    }
}
