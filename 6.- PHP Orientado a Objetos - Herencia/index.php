<?php

/**
* PHP no permite herencia multiple
*/
class Vehiculo
{
    // Atributos
    public $motor = false;
    public $marca;
    public $color;

    // Metodos
    protected function estado()
    {
        if ( $this->motor ) {
            echo "El motor esta encendido <br>";
        } else {
            echo "El motor esta apagado <br>";
        }
    }

    public function encender()
    {
        if ( $this->motor ) {
            echo "Cuidado, elmotor ya esta prendido <br>";
        } else {
            echo "El motor ahora esta encendido <br>";
            $this->motor = true;
        }
    }
}

/**
* 
*/
class Moto extends Vehiculo
{
    // Atributos

    // Metodos
    public function estadoMoto()
    {
        $this->estado();
    }
}

/**
* 
*/
class CuatriMoto extends Moto
{
    
}

/*
$vehiculo = new Vehiculo();
$vehiculo->estado();
$vehiculo->encender();
$vehiculo->estado();
*/

$moto = new Moto();
$moto->estadoMoto();

$cuatri_moto = new CuatriMoto();
$cuatri_moto->encender();