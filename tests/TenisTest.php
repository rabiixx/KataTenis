<?php

namespace Deg540\PHPTestingBoilerplate;

use PHPUnit\Framework\TestCase;

class TenisTest extends TestCase
{


    /**
     * @test
     */
    public function consulta_bien_puntuacion(){
        $Tenis = new Tenis();
        $Jugador = new Jugador();
        $Jugador->setPuntuacion(0);

        $result = $Tenis->consultar_puntuacion($Jugador);

        $this->assertEquals(0, $result);
    }

    /**
     * @test
     */
    public function suma_tantos_bien(){
        $Tenis = new Tenis();
        $Jugador = new Jugador();
        $Jugador->setPuntuacion(0);

        $result = $Tenis->suma_tanto($Jugador);

        $this->assertEquals(15, $result);
    }

    /**
     * @test
     */
    public function crea_bien_partido(){
        $RomanToDecimal = new Tenis();

        $result = $RomanToDecimal->crear_partido();

        $this->assertEquals([0,0], $result);
    }


}
