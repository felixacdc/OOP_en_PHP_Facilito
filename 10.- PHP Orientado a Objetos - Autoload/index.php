<?php

/*
Muchos desarrolladores que escriben aplicaciones orientadas a objetos crean un fichero fuente PHP para cada definicion de clase. Una de las mayores molestias es tener que hacer una larga lista de includes al comienzo de cada script.

Se puede definir una funcion que es automaticamente invocada en caso de que se este intentando utilizar una clase/interfaz que todavia no haya sido definida. Al invocar a esta funcion el motor de scripting da una ultima oportunidad para cargar la clase antes que PHP falle con un error.

Usaremos la funcion sql_autoload_register(), lo que va hacer es auto-cargar clases desde una funcion donde intentemos cargar los archivos donde se encuentran esas clases.
*/

function autoloader($clase) {
    include "clases/" . $clase . ".php";
}

spl_autoload_register('autoloader');
 
Persona::mostrar("Hola mundo <br>");
Auto::mostrar("Soy Auto");
