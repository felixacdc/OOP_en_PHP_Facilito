<?php

/**
* 
*/
class Loteria
{
    // Atributos
    public $numero;
    public $intentos;
    public $resultado = false;

    // Metodos
    public function __construct($numero, $intentos)
    {
        $this->numero = $numero;
        $this->intentos = $intentos;
    }

    public function sortear()
    {
        $minimo = $this->numero / 2;
        $maximo = $this->numero * 2;

        for ($i = 0; $i < $this->intentos; $i++) {
            $int = rand($minimo, $maximo); 
            $this->intentos($int);
        }
    }

    public function intentos($int)
    {
        if ( $int == $this->numero) {
            echo "<strong style='color:blue;'>" . $int . " == " . $this->numero . "</strong><br>";
            $this->resultado = true;
        } else {
            echo "<span style='color:red;'>" . $int . " != " . $this->numero . "</span><br>";
        }
    }

    public function __destruct()
    {
        if ( $this->resultado ) {
            echo "<br>Felicidades, has acertado en " . $this->intentos . " intentos.";
        } else {
            echo "<br>Que lastima, has perdido en " . $this->intentos . " intentos.";
        }
    }
}

$loteria = new Loteria(10, 10);
$loteria->sortear();