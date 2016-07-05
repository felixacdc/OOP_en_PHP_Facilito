<?php

/*
¿Qué son los espacios de nombres? En su definición más aceptada, los espacios de nombres son una manera de encapsular elementos. Se pueden ver como un concepto abstracto en muchos aspectos. Por ejemplo, en cualquier sistema operativo, los directorios sirven para agrupar ficheros relacionados, actuando así como espacios de nombres para los ficheros que contienen. Como ejemplo, el fichero foo.txt puede existir en los directorios /home/greg y /home/otro, pero no pueden coexistir dos copias de foo.txt en el mismo directorio. Además, para acceder al fichero foo.txt fuera del directorio /home/greg, se debe anteponer el nombre del directorio al nombre del fichero, empleando el separador de directorios para así obtener /home/greg/foo.txt. Este mismo principio se extiende a los espacios de nombres en el mundo de la programación.
*/

spl_autoload_register(function($clase){
    $ruta = 'api/' . str_replace("\\", "/", $clase) . ".php";

    if ( is_readable($ruta) ) {
        require_once $ruta;
    } else {
        echo "El archivo no existe";
    }

});

Models\Persona::hola();
// Controllers\Persona::hola();
Controllers\PersonasController::hola();