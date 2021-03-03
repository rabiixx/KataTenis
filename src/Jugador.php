<?php


namespace Deg540\PHPTestingBoilerplate;


class Jugador
{
    private $puntuacion;
    private $nombre;

    public function getPuntuacion(){
        return $this->puntuacion;
    }
    public function setPuntuacion(int $nuevaPuntuacion){
        $this->puntuacion = $nuevaPuntuacion;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
}