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

    // Test the conversion of a temperature to celsius
    public function test_conversion_of_celsius()
    {
        $response = $this->post('/convert',[
            'temp' => '100',
            'temp_type' => 'celsius'
        ]);

        $response->assertStatus(200, "Response:" . $response->getContent());
    }

    // Test the conversion of a temperature to fahrenheit
    public function test_conversion_of_fahrenheit()
    {
        $response = $this->post('/convert',[
            'temp' => '100',
            'temp_type' => 'fahrenheit'
        ]);

        $response->assertStatus(200, "Response:" . $response->getContent());
        
    }

}
