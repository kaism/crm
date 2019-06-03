<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Collection;

class ClientTest extends TestCase
{
	use RefreshDatabase;

    /** @test */
    public function a_client_can_be_created()
    {
        $client = factory('App\Client')->create();
        $this->assertDatabaseHas('clients', ['id' => $client->id]);
    }

	/** @test */
	public function a_client_has_a_path()
	{
	    $client = factory('App\Client')->create();
	    $this->assertEquals('/clients/' . $client->id, $client->path());
	}

    /** @test */
    public function a_client_has_email_addresses()
    {
	    $client = factory('App\Client')->create();
        $this->assertInstanceOf(Collection::class, $client->emailAddresses);
    }
}
