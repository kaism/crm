<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmailsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function a_user_can_view_a_list_of_emails()
    {
        $this->withoutExceptionHandling();
        $emails = factory('App\Email', 5)->create();
        $this->get('/emails')
            ->assertSee($emails[0]['from'])
            ->assertSee($emails[0]['to'])
            ->assertSee($emails[0]['subject'])
            ->assertSee($emails[1]['subject'])
            ->assertSee($emails[2]['subject'])
            ->assertSee($emails[3]['subject'])
            ->assertSee($emails[4]['subject']);
    }

    /** @test */
    public function a_user_can_view_an_email()
    {
        $this->withoutExceptionHandling();
        $email = factory('App\Email')->create();
        $this->get($email->path())
            ->assertSee($email->message_id)
            ->assertSee($email->from)
            ->assertSee($email->to)
            ->assertSee($email->subject)
            ->assertSee($email->body);
    }

}
