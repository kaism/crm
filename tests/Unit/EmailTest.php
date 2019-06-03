<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmailTest extends TestCase
{
	use RefreshDatabase;

    /** @test */
    public function it_can_be_created()
    {
        $this->withoutExceptionHandling();
        $email = factory('App\Email')->create();
        $this->assertDatabaseHas('emails', ['message_id' => $email->message_id]);
    }

	/** @test */
	public function it_has_a_path()
	{
	    $email = factory('App\Email')->create();
	    $this->assertEquals('/emails/' . $email->id, $email->path());
	}

}
