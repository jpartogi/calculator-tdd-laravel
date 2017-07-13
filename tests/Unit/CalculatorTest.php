<?php

namespace Tests\Unit;

use Tests\TestCase;

class CalculatorTest extends TestCase
{
    public function testSingle()
    {
        $response = $this->get('/api/calc?str=1');

        $response->assertJson([
            'result' => 1,
        ]);
    }

    public function testTwo(){
    	$response = $this->get('/api/calc?str=1,2');

    	$response->assertJson([
            'result' => 3,
        ]);
    }

}
