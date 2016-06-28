<?php

/*
Una clase abstracta tiene por objeto agrupar atributos y metodos que luego seran heredados por otra subjclase.

Las clases definidas como abstractas no se pueden instanciar y cualquier clase que contiene al menos un metodo abstracto debe ser definida como tal. Los metodos definidos como abstractos siempre declaran la firma del metodo, pero no pueden definir la implementacion.

Si queremos que las subclases implementen comportamientos obligatoriamente podemos definir metodos abstractos.

Un metodo obstracto se declara en una clase pero no se lo implementa.
En los metodos abstractos se pueden declarar parametros obligatorios o no.
*/

require_once ("abstractas.php");

/**
* 
*/
class Persona extends Molde
{
    private $mensaje = "Hola gente de codigo facilito<br>";
    private $nombre;

    public function mostrar()
    {
        print $this->mensaje;
    }

    public function ingresarNombre($nombre, $username = "cf")
    {
        $this->nombre = $nombre . " " . $username;
    }

    public function obtenerNombre()
    {
        print $this->nombre;
    }
}

$obj = new Persona();
$obj->mostrar();
$obj->ingresarNombre("Felix Mendez", "ACDC");
$obj->obtenerNombre();