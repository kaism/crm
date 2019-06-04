<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmailsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guests_cannot_view_emails()
    {
        // list
        $this->get('/emails')->assertRedirect('login');

        // single
        $email = factory('App\Email')->create();
        $this->get($email->path())->assertRedirect('login');
    }

    /** @test */
    public function a_user_can_view_a_list_of_emails()
    {
        $this->be(factory('App\User')->create());
        $emails = factory('App\Email', 3)->create();
        $this->get('/emails')
            ->assertSee($emails[0]->from_address->address)
            ->assertSee($emails[0]->to_address->address)
            ->assertSee($emails[0]->subject)
            ->assertSee($emails[1]->subject)
            ->assertSee($emails[2]->subject);
    }

    /** @test */
    public function a_user_can_view_an_email()
    {
        $this->be(factory('App\User')->create());
        $email = factory('App\Email')->create();

        $this->get($email->path())
            ->assertSee($email->message_id)
            ->assertSee($email->from_address->address)
            ->assertSee($email->to_address->address)
            ->assertSee($email->subject)
            ->assertSee($email->body);
    }

}
