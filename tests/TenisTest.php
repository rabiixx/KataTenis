<?php

namespace Deg540\PHPTestingBoilerplate;

use PHPUnit\Framework\TestCase;

class TenisTest extends TestCase
{
    /**
     * @test
     */
    public function hace_bien_casos_base_a_decimal(){
        $RomanToDecimal = new Tenis();

        //$result = $Tenis->elige("M");

        $this->assertEquals(1, $RomanToDecimal->convierte_numero_romano_a_decimal("I"));
        $this->assertEquals(4, $RomanToDecimal->convierte_numero_romano_a_decimal("IV"));
        $this->assertEquals(5, $RomanToDecimal->convierte_numero_romano_a_decimal("V"));
        $this->assertEquals(9, $RomanToDecimal->convierte_numero_romano_a_decimal("IX"));
        $this->assertEquals(10, $RomanToDecimal->convierte_numero_romano_a_decimal("X"));
        $this->assertEquals(40, $RomanToDecimal->convierte_numero_romano_a_decimal("XL"));
        $this->assertEquals(50, $RomanToDecimal->convierte_numero_romano_a_decimal("L"));
        $this->assertEquals(90, $RomanToDecimal->convierte_numero_romano_a_decimal("XC"));
        $this->assertEquals(100, $RomanToDecimal->convierte_numero_romano_a_decimal("C"));
        $this->assertEquals(86, $RomanToDecimal->convierte_numero_romano_a_decimal("LXXXVI"));
        $this->assertEquals(150, $RomanToDecimal->convierte_numero_romano_a_decimal("CL"));
    }


    /**
     * @test
     */
    public function hace_bien_los_de_tipo_suma(){
        $RomanToDecimal = new Tenis();

        //$result = $Tenis->casos_base("M");

        $this->assertEquals(20, $RomanToDecimal->convierte_numero_romano_a_decimal("XX"));
    }

    /**
     * @test
     */
    public function hace_bien_los_de_tipo_resta(){
        $RomanToDecimal = new Tenis();

        //$result = $Tenis->casos_base("M");

        $this->assertEquals(149, $RomanToDecimal->convierte_numero_romano_a_decimal("CXLIX"));
    }

    /**
     * @test
     */
    public function elige_bien_el_tipo_y_calcula_decimal(){
        $RomanToDecimal = new Tenis();

        //$result = $Tenis->casos_base("M");

        $this->assertEquals(149, $RomanToDecimal->convierte_numero_romano_a_decimal("CXLIX"));
        $this->assertEquals(49, $RomanToDecimal->convierte_numero_romano_a_decimal("XLIX"));
        $this->assertEquals(87, $RomanToDecimal->convierte_numero_romano_a_decimal("LXXXVII"));
        $this->assertEquals(90, $RomanToDecimal->convierte_numero_romano_a_decimal("XC"));
    }
    /**
     * @test
     */
 /*   public function test_final(){
        $Tenis = new Tenis();

        $result = $Tenis->convierte_todos();

        $this->assertEquals([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150], $result);
    }*/

}
