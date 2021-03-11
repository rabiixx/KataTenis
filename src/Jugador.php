<?php


namespace Deg540\PHPTestingBoilerplate;


class Jugador
{
    /**
     * @var
     */
    private $puntuacion;
    private $nombre;

    /**
     * @return mixed
     */
    public function getPuntuacion(){
        return $this->puntuacion;
    }

    /**
     * @param int $nuevaPuntuacion
     */
    public function setPuntuacion(int $nuevaPuntuacion){
        $this->puntuacion = $nuevaPuntuacion;
    }

    /**
     * @return mixed
     */
    public function getNombre(){
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
}