<?php


namespace Deg540\PHPTestingBoilerplate;


class Tenis
{
    /**
     * @var Jugador
     */
    public $jugador1;
    public $jugador2;

    /**
     * Tenis constructor.
     * @param $nombreJugador1
     * @param $nombreJugador2
     */
    public function __construct($nombreJugador1, $nombreJugador2)
    {
        $this->jugador1 = new Jugador();
        $this->jugador1->setPuntuacion(0);
        $this->jugador1->setNombre($nombreJugador1);
        $this->jugador2 = new Jugador();
        $this->jugador2->setPuntuacion(0);
        $this->jugador2->setNombre($nombreJugador2);
    }

    /**
     * @return string
     */
    public function getScore()
    {
        if ($this->ha_ganado_1()) {
            return "Gana " . $this->jugador1->getNombre();
        }
        if ($this->ha_ganado_2()) {
            return "Gana " . $this->jugador2->getNombre();
        }
        if($this->no_tienen_los_mismos_puntos()){
            if($this->tiene_ventaja_jugador_1()){
                return $this->traducir_puntuacion($this->jugador1->getPuntuacion()) . " " . $this->jugador1->getNombre();
            }
            if($this->tiene_ventaja_jugador_2()){
                return $this->traducir_puntuacion($this->jugador2->getPuntuacion()) . " " . $this->jugador2->getNombre();
            }
            return $this->traducir_puntuacion($this->jugador1->getPuntuacion()) . " - " . $this->traducir_puntuacion($this->jugador2->getPuntuacion());
        }
        if($this->jugador1->getPuntuacion() == 45){
            return "Deuce";
        }
        return $this->traducir_puntuacion($this->jugador1->getPuntuacion()) . " all";
    }

    /**
     * @param string $nombreJugador
     */
    public function wonPoint(string $nombreJugador)
    {
        if($this->es_el_jugador_1($nombreJugador)){
            $puntuacion = $this->jugador1->getPuntuacion();
            if($puntuacion == 45 && $this->jugador2->getPuntuacion()>45){
                $this->jugador2->setPuntuacion(45);
            } else{
                $this->jugador1->setPuntuacion($puntuacion+15);
            }
        }
        if($this->es_el_jugador_2($nombreJugador)){
            $puntuacion = $this->jugador2->getPuntuacion();
            if($puntuacion == 45 && $this->jugador1->getPuntuacion()>45){
                $this->jugador1->setPuntuacion(45);
            } else {
                $this->jugador2->setPuntuacion($puntuacion + 15);
            }
        }

    }

    /**
     * @param $puntuacion
     * @return string
     */
    private function traducir_puntuacion($puntuacion){
        $casosBase = array(
            0 => "Love",
            15 => "Fifteen",
            30 => "Thirty",
            45 => "Forty",
            60 => "Advantage",
        );
        foreach ($casosBase as $clave => $valor) {
            if($clave == $puntuacion){
                return $valor;
            }
        }
    }


    /* Funciones de comprobación en ifs para simplificar el codigo*/
    /**
     * @param $nombreJugador
     * @return bool
     */
    private function es_el_jugador_1($nombreJugador){
        if($this->jugador1->getNombre() == $nombreJugador){
            return true;
        }
        return false;
    }

    /**
     * @param $nombreJugador
     * @return bool
     */
    private function es_el_jugador_2($nombreJugador){
        if($this->jugador2->getNombre() == $nombreJugador){
            return true;
        }
        return false;
    }

    /**
     * @return bool
     */
    private function tiene_ventaja_jugador_1(){
        if($this->jugador1->getPuntuacion() > 45){
            return true;
        }
        return false;
    }

    /**
     * @return bool
     */
    private function tiene_ventaja_jugador_2(){
        if($this->jugador2->getPuntuacion() > 45){
            return true;
        }
        return false;
    }

    /**
     * @return bool
     */
    private function ha_ganado_1(){
        if(($this->jugador1->getPuntuacion() > 45 && $this->jugador2->getPuntuacion() < 45) || ($this->jugador1->getPuntuacion() > 60)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * @return bool
     */
    private function ha_ganado_2(){
        if(($this->jugador2->getPuntuacion() > 45 && $this->jugador1->getPuntuacion() < 45) || ($this->jugador2->getPuntuacion() > 60)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * @return bool
     */
    private function no_tienen_los_mismos_puntos(){
        if($this->jugador1->getPuntuacion() != $this->jugador2->getPuntuacion()){
            return true;
        }else{
            return false;
        }
    }


}