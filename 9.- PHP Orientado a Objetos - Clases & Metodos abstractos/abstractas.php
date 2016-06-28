<?php

/**
* 
*/
abstract class Molde
{
    // Los metodos definidos en la funcion son obligatorios
    abstract public function ingresarNombre($nombre);
    abstract public function obtenerNombre();
}