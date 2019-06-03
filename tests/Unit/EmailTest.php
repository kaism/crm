<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmailTest extends TestCase
{
	use RefreshDatabase;

    /** @test */
    public function an_email_can_be_created()
    {
        $this->withoutExceptionHandling();
        $email = factory('App\Email')->create();
        $this->assertDatabaseHas('emails', ['message_id' => $email->message_id]);
    }

	/** @test */
	public function an_email_has_a_path()
	{
	    $email = factory('App\Email')->create();
	    $this->assertEquals('/emails/' . $email->id, $email->path());
	}

	/** @test */
	public function an_email_has_a_to_and_from_address()
	{
        $email = factory('App\Email')->create();
		$this->assertInstanceOf('App\EmailAddress', $email->to_address);
		$this->assertInstanceOf('App\EmailAddress', $email->from_address);
	}

}
