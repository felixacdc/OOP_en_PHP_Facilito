<?php

/**
* 
*/
class Pagina
{
    // Atributos
    public $nombre = "Codigo facilito";
    public static $url = "www.codigofacilito.com";

    // Metodos
    public function bienvenida()
    {
        echo "Bienvenidos a <b> " . $this->nombre . "</b> la pagina es <b>" . self::$url . "</b><br>";
    }

    public static function bienvenida2()
    {
        echo "Bienvenidos a " . self::$url . "<br>";
    }
}

/**
* 
*/
class Web extends Pagina
{
    
}

$pagina = new Pagina();
$pagina->bienvenida();

Pagina::bienvenida2();
Web::bienvenida2();