<?php


namespace Deg540\PHPTestingBoilerplate;


class Tenis
{
    public $jugador1;
    public $jugador2;


    public function constructor($nombre1,$nombre2)
    {
        $this->jugador1 = new Jugador();
        $this->jugador1->setPuntuacion(0);
        $this->jugador1->setNombre($nombre1);
        $this->jugador2 = new Jugador();
        $this->jugador2->setPuntuacion(0);
        $this->jugador2->setNombre($nombre2);
        return [$this->jugador1->getNombre(),$this->jugador1->getPuntuacion(),$this->jugador2->getNombre(),$this->jugador2->getPuntuacion()];
    }

    public function getScore()
    {
        if ($this->jugador1->getPuntuacion() > 40 && $this->jugador2->getPuntuacion() < 40) {
            return "Gana " . $this->jugador1->getNombre();
        }
        if($this->tienen_los_mismos_puntos()){
            return $this->traducir_marcador($this->jugador1->getPuntuacion()) . " - " . $this->traducir_marcador($this->jugador2->getPuntuacion());
        }
        return $this->traducir_marcador($this->jugador1->getPuntuacion()) . " all";
    }

    public function tienen_los_mismos_puntos(){
        if($this->jugador1->getPuntuacion() != $this->jugador2->getPuntuacion()){
            return true;
        }else{
            return false;
        }
    }

    public function traducir_marcador($marcador){
        $casosBase = array(
            "45 - 45" => "Deuce",
            "40 - 60" => "Advantage " . $this->jugador2->getNombre(),
            "60 - 40" => "Advantage" . $this->jugador1->getNombre(),
            0 => "Love",
            15 => "Fifteen",
            30 => "Thirty",
            45 => "Forty",
        );
        foreach ($casosBase as $clave => $valor) {
            if($clave == $marcador){
                return $valor;
            }
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


}