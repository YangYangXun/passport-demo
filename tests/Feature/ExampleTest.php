<?php

namespace Tests\Feature;

use App\User;
use Laravel\Passport\Passport;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAPIDetailTest()
    {

        $user = User::find(1);
        Passport::actingAs($user);

        $response = $this->post('/api/details');
        // dump($response);

        $response->assertStatus(200);
    }

}
