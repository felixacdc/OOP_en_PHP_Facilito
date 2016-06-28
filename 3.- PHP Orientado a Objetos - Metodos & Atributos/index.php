<?php

/**
* Clase para registrar personas
*/
class Persona
{
    // Atributos
    public $nombre = [];
    public $apellido = [];

    // Metodos
    public function guardar($nombre, $apellido) {
        $this->nombre[] = $nombre;
        $this->apellido[] = $apellido;
    }

    public function mostrar() {
        for ($i = 0; $i < count($this->nombre); $i++) { 
            $this->formato($this->nombre[$i], $this->apellido[$i]);
        }
    }

    public function formato($nombre, $apellido) {
        echo "Nombre: " . $nombre . " | Apellido: " . $apellido . "<br>";
    }
}

$persona = new Persona();

$persona->guardar("Carlos", "Fernandez");
$persona->guardar("Uriel", "Hernandez");

$persona->mostrar();