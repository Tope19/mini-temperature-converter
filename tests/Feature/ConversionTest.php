<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConversionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    // Test the conversion of a temperature to celsius or fahrenheit
    public function test_conversion_of_temperature()
    {
        $response = $this->get('/convert');

        $response->assertStatus(200);
        $response->assertSee('0.00');

    }
    
}
