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
}