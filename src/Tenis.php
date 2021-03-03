<?php


namespace Deg540\PHPTestingBoilerplate;


class Tenis
{


    public function crear_partido()
    {
        $jugador1 = new Jugador();
        $jugador1->setPuntuacion(0);
        $jugador2 = new Jugador();
        $jugador2->setPuntuacion(0);
        return[$jugador1->getPuntuacion(),$jugador2->getPuntuacion()];
    }

    public function consultar_puntuacion($jugador)
    {
        return $jugador->getPuntuacion();
    }

    public function suma_tanto(Jugador $Jugador)
    {
        $puntuacion = $Jugador->getPuntuacion();
        $Jugador->setPuntuacion($puntuacion+15);
        $puntuacion = $Jugador->getPuntuacion();
        return $puntuacion;
    }


}