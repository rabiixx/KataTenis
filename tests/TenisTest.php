<?php

namespace Deg540\PHPTestingBoilerplate;

use PHPUnit\Framework\TestCase;

class TenisTest extends TestCase
{

    /**
     * @test
     */
    public function consulta_bien_puntuacion(){
        $Tenis = new Tenis("Pedro","Juan");

        $result = $Tenis->getScore();

        $this->assertEquals("Love all", $result);
    }

    /**
     * @test
     */
    public function suma_tantos_bien(){
        $Tenis = new Tenis("Pedro","Juan");
        $Tenis->wonPoint("Pedro");

        $result = $Tenis->getScore();
        $this->assertEquals("Fifteen - Love", $result);
    }

    /**
     * @test
     */
    public function con_mas_de_40_gana_partido(){
        $Tenis = new Tenis("Pedro","Juan");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Pedro");

        $result = $Tenis->getScore();
        $this->assertEquals("Gana Pedro", $result);
    }

    /**
     * @test
     */
    public function uno_con_mas_de_40_y_el_otro_con_40_NO_gana_partido(){
        $Tenis = new Tenis("Pedro","Juan");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Juan");
        $Tenis->wonPoint("Juan");
        $Tenis->wonPoint("Juan");
        $Tenis->wonPoint("Pedro");

        $result = $Tenis->getScore();
        $this->assertEquals("Advantage Pedro", $result);
    }
    /**
     * @test
     */
    public function con_mismas_puntuaciones_pone_puntuacion_all(){
        $Tenis = new Tenis("Pedro","Juan");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Juan");
        $Tenis->wonPoint("Juan");

        $result = $Tenis->getScore();
        $this->assertEquals("Thirty all", $result);
    }

    /**
     * @test
     */
    public function si_van_40_40_devuelve_deuce(){
        $Tenis = new Tenis("Pedro","Juan");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Juan");
        $Tenis->wonPoint("Juan");
        $Tenis->wonPoint("Juan");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Juan");

        $result = $Tenis->getScore();
        $this->assertEquals("Deuce", $result);
    }

    /**
     * @test
     */
    public function si_hace_punto_el_que_no_llevaba_la_ventaja_vuelve_a_deuce(){
        $Tenis = new Tenis("Pedro","Juan");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Juan");
        $Tenis->wonPoint("Juan");
        $Tenis->wonPoint("Juan");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Juan");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Juan");

        $result = $Tenis->getScore();
        $this->assertEquals("Deuce", $result);
    }

    /**
     * @test
     */
    public function si_jugador_con_ventaja_vuelve_a_puntuar_gana(){
        $Tenis = new Tenis("Pedro","Juan");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Juan");
        $Tenis->wonPoint("Juan");
        $Tenis->wonPoint("Juan");
        $Tenis->wonPoint("Pedro");
        $Tenis->wonPoint("Pedro");

        $result = $Tenis->getScore();
        $this->assertEquals("Gana Pedro", $result);
    }



}
