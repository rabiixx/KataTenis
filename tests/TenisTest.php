<?php

namespace Deg540\PHPTestingBoilerplate;

use PHPUnit\Framework\TestCase;

class TenisTest extends TestCase
{
    /**
     * @test
     */
    public function crea_bien_partido(){
        $partidoTenis = new Tenis();

        $result = $partidoTenis->constructor("Pedro","Juan");

        $this->assertEquals(["Pedro",0,"Juan",0], $result);
    }

    /**
     * @test
     */
    public function consulta_bien_puntuacion(){
        $Tenis = new Tenis();
        $Tenis->constructor("Pedro","Juan");

        $result = $Tenis->getScore();

        $this->assertEquals("0 - 0", $result);
    }

    /**
     * @test
     */
    public function suma_tantos_bien(){
        $Tenis = new Tenis();
        $Tenis->constructor("Pedro","Juan");
        $Tenis->wonPoint("Pedro");

        $result = $Tenis->getScore();
        $this->assertEquals("15 - 0", $result);
    }

    /**
     * @test
     */
    public function con_mas_de_40_gana_partido(){
        $Tenis = new Tenis();
        $Tenis->constructor("Pedro","Juan");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Pedro");

        $result = $Tenis->getScore("Pedro");
        $this->assertEquals("Gana Pedro", $result);
    }




}
