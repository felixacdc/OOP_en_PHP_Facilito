<?php namespace Config;

    /**
    * Enrutador (en los framework le llaman a esta clase bootstrap)
    */
    class Enrutador
    {
        public static function run(Request $request)
        {
            $controlador = $request->getControlador() . "Controller";
            $rute = ROOT . "Controllers" . DS . $controlador . ".php";
            $metodo = $request->getMetodo();
            $argumento = $request->getArgumento();
            // print_r($argumento);

            // Condicion para verificar si se esta cargando el index de la pagina y si es asi que redirecciones al controlador de estudiantes
            if ( $metodo == "index.php" ) {
                $metodo = "index";
            }

            if ( is_readable($rute) ) {
                require_once $rute;
                $mostrar = "Controllers\\" . $controlador;
                $controlador = new $mostrar; 

                // Si no existe un metodo 
                if ( !isset($argumento) ) {
                    // Permite llamar a una funcion
                    call_user_func(array($controlador, $metodo));
                } else {
                    // Permite llamar a una funcion pasandole un array de argumentos
                    call_user_func_array(array($controlador, $metodo), $argumento);
                }              
            }
            // print_r($rute);
        }
    }