<?php

use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// create user
        $user = factory(App\User::class)->create([
        	'name' => 'Test',
        	'email' => 'test@test.com'
	    ]);

        // create 5 emails
        factory(App\Email::class, 5)->create();

    }
}
