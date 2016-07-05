<?php

    /**
    * 
    */
    class Persona 
    {
        // Atributos
        public $nombre = "Felix";

        // Metodos
        public function hablar($mensaje) 
        {
            echo $mensaje;
        }
    }

    $persona = new Persona();

    // echo $persona->nombre;

    $persona->hablar("Hola Mundo");