<?php


namespace Deg540\PHPTestingBoilerplate;


class Tenis
{
    public $jugador1;
    public $jugador2;

    public function __construct($nombre1,$nombre2)
    {
        $this->jugador1 = new Jugador();
        $this->jugador1->setPuntuacion(0);
        $this->jugador1->setNombre($nombre1);
        $this->jugador2 = new Jugador();
        $this->jugador2->setPuntuacion(0);
        $this->jugador2->setNombre($nombre2);
    }

    public function getScore()
    {
        if ($this->ha_ganado_1()) {
            return "Gana " . $this->jugador1->getNombre();
        }
        if ($this->ha_ganado_2()) {
            return "Gana " . $this->jugador2->getNombre();
        }
        if($this->no_tienen_los_mismos_puntos()){
            if($this->jugador1->getPuntuacion() > 45){
                return $this->traducir_marcador($this->jugador1->getPuntuacion()) . " " . $this->jugador1->getNombre();
            }
            if($this->jugador2->getPuntuacion() > 45){
                return $this->traducir_marcador($this->jugador2->getPuntuacion()) . " " . $this->jugador2->getNombre();
            }
            return $this->traducir_marcador($this->jugador1->getPuntuacion()) . " - " . $this->traducir_marcador($this->jugador2->getPuntuacion());
        }
        return $this->traducir_marcador($this->jugador1->getPuntuacion()) . " all";
    }

    public function wonPoint(string $nombreJugador)
    {
        if($this->jugador1->getNombre() == $nombreJugador){
            $puntuacion = $this->jugador1->getPuntuacion();
            $this->jugador1->setPuntuacion($puntuacion+15);
        }
        if($this->jugador2->getNombre() == $nombreJugador){
            $puntuacion = $this->jugador2->getPuntuacion();
            $this->jugador2->setPuntuacion($puntuacion+15);
        }

    }

    private function ha_ganado_1(){
        if($this->jugador1->getPuntuacion() > 45 && $this->jugador2->getPuntuacion() < 45){
            return true;
        }else{
            return false;
        }
    }
    private function ha_ganado_2(){
        if($this->jugador2->getPuntuacion() > 45 && $this->jugador1->getPuntuacion() < 45){
            return true;
        }else{
            return false;
        }
    }

    private function no_tienen_los_mismos_puntos(){
        if($this->jugador1->getPuntuacion() != $this->jugador2->getPuntuacion()){
            return true;
        }else{
            return false;
        }
    }

    private function traducir_marcador($marcador){
        $casosBase = array(
            0 => "Love",
            15 => "Fifteen",
            30 => "Thirty",
            45 => "Forty",
            60 => "Advantage",
        );
        foreach ($casosBase as $clave => $valor) {
            if($clave == $marcador){
                return $valor;
            }
        }
        return $this->traducir_marcador($this->jugador1->getPuntuacion()) . " all";
    }




}