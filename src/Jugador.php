<?php


namespace Deg540\PHPTestingBoilerplate;


class Jugador
{
    private $puntuacion;

    public function getPuntuacion(){
        return $this->puntuacion;
    }
    public function setPuntuacion(int $nuevaPuntuacion){
        $this->puntuacion = $nuevaPuntuacion;
    }
}