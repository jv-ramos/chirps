<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

describe('Login', function () {
    uses(RefreshDatabase::class);

    it('should login correctly', function () {
        User::factory()->create(['name' => 'John Doe', 'email' => 'john@example.com', 'password' => '123456789']);

        $response = $this->post('/login', ['email' => 'john@example.com', 'password' => '123456789']);

        $response->assertRedirect('/');
        $response->assertSessionHas('success', 'Welcome back!');
        $this->assertAuthenticated();
    });

    it('should not be able to login with invalid credentials', function () {
        User::factory()->create(['name' => 'John Doe', 'email' => 'john@example.com', 'password' => '123456789']);

        $response = $this->post('/login', ['email' => 'johndoe@example.com', 'password' => '123456789']);

        $response->assertFound()->assertSessionHasErrors('email');
        $this->assertGuest();
    });


    it('should fail when field is missing', function (string $field) {
        User::factory()->create(['name' => 'John Doe', 'email' => 'john@example.com', 'password' => '123456789']);

        $data = ['email' => 'john@example.com', 'password' => '123456789'];

        unset($data[$field]);

        $this->post('/login', $data)
            ->assertSessionHasErrors($field);
        $this->assertGuest();
    })->with(['email', 'password']);
});
