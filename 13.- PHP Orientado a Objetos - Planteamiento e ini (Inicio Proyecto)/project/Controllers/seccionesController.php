<?php namespace Controllers;

    /**
    * Controlador de estudiantes
    */
    class seccionesController
    {
        public function index()
        {
            print_r("Hola soy el index del secciones");
        }

        public function ver($num)
        {
            print_r("EL numero es: " . $num);
        }
    }