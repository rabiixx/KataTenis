<?php

namespace Deg540\PHPTestingBoilerplate;

use PHPUnit\Framework\TestCase;

class TenisTest extends TestCase
{
    /**
     * @test
     */
    public function crea_bien_partido(){
        $RomanToDecimal = new Tenis();

        $result = $RomanToDecimal->crear_partido();

        $this->assertEquals([0,0], $result);
    }
}
