<?php

/**
* 
*/
class Facebook
{
    // Atributos
    public $nombre;
    public $edad;
    private $contraseña;

    // Metodos
    function __construct($nombre, $edad, $contraseña)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->contraseña = $contraseña;
    }

    public function verInformacion() 
    {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        $this->cambiarPass("abcde");
        echo "Password: " . $this->contraseña . "<br>";
    }

    private function cambiarPass($password)
    {
        $this->contraseña = $password;
    }
}

$facebook = new Facebook("Felix Mendez", 22, "12345");
$facebook->verInformacion();