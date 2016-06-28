<?php

/*
En una interfaz se definen habitualmente un juego de funciones que deben codificar las clases que implementan dicha interfaz. De modo que, cuando una clase implementa una interfaz, podremos estar seguros que en su código están definidas las funciones que incluía esa interfaz.

Las interfaces de objetos permiten crear codigo con el cual especificamos que metodos deben ser implementados por una clase.

Las interfaces son definidas utilizando la palabra clave interface, de la misma forma que con clases estandar, pero sin metodos que tnegan su contenido definico.

Todos los metodos declarados en una interfaz deben ser publicos.
*/

/*
Ejemplo de interfaz: Vamos a realizar una aplicacion para automoviles donde se debera tener gasolina para poder encender el automovil, ademas este podra usarse pero gastara gasolina y una ves que su tanque este vacio se va ha apagar.
*/

require_once ("interfaz.php");

/**
* 
*/
class Deportivo implements Gasolina
{
    private $estado = false;
    private $tanque = 0;

    public function estado()
    {
        if ( $this->estado ) {
                print "El auto esta encendido y tiene " . $this->tanque . " de litos en el tanque <br>";
            } else {
                print "El auto esta apagado<br>";
            }
                
    }

    public function encender()
    {
        if ( $this->estado ) {
            print "No puedes encender el auto 2 veces <br>";
        } else {
            if ( $this->tanque <= 0) {
                print "Usted no puede encender el auto porque el tanque esta vacio <br>";
            } else {
                print "Auto encendido correctamente<br>";
                $this->estado = true;
            }
        }
        
    }

    public function apagar()
    {
        if ( $this->estado ) {
            print "Auto apagado correctamente <br>";
            $this->estado = false;
        } else {
            print "No puedes apagar el auto 2 veces <br>";
        }
    }

    public function vaciarTanque()
    {
        $this->tanque = 0;
    }

    public function llenarTanque($cant)
    {
        $this->tanque = $cant;
    }

    public function usar($km)
    {
        if ( $this->estado ) {
            $reducir = $km / 3;
            $this->tanque = $this->tanque - $reducir;

            if ( $this->tanque <= 0) {
                $this->estado = false;
            }
        } else {
            print "El auto esta apagado y no se puede usar<br>";
        }
        
    }
}

$obj = new Deportivo();
$obj->llenarTanque(100);
$obj->encender();
$obj->usar(350);
$obj->estado();