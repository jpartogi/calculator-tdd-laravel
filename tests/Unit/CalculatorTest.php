<?php

namespace Tests\Unit;

use Tests\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSingle()
    {
        $response = $this->get('/calc?str=1');

        $response->assertJson([
                'result' => 1,
        ]);
    }

    public function testTwo(){
    	$response = $this->get('/calc?str=1,2');

    	$response->assertJson([
                'result' => 3,
        ]);
    }

    public function testThree(){
    	$response = $this->get('/calc?str=1,2,3');

    	$response->assertJson([
                'result' => 6,
        ]);
    }
}
