<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Collection;

class EmailAddressTest extends TestCase
{
	use RefreshDatabase;
	
    /** @test */
    public function an_email_address_can_be_created()
    {
        $emailAddress = factory('App\EmailAddress')->create();
        $this->assertDatabaseHas('email_addresses', ['id' => $emailAddress->id]);
    }

    /** @test */
    public function an_email_address_has_a_client()
    {
        $emailAddress = factory('App\EmailAddress')->create();
        $this->assertInstanceOf('App\Client', $emailAddress->client);
    }

    /** @test */
    public function an_email_address_has_sent_emails()
    {
        $emailAddress = factory('App\EmailAddress')->create();
        $this->assertInstanceOf(Collection::class, $emailAddress->sentEmails);
    }

    /** @test */
    public function an_email_address_has_received_emails()
    {
        $emailAddress = factory('App\EmailAddress')->create();
        $this->assertInstanceOf(Collection::class, $emailAddress->receivedEmails);
    }
}
