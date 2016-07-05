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

            // Condicion para verificar si se esta cargando el index de la pagina y si es asi que redirecciones al controlador de estudiantes
            if ( $metodo == "index.php" ) {
                $metodo = "index";
            }

            $argumento = $request->getArgumento();
            // print_r($argumento);

            // is_readable — Indica si un fichero existe y es legible
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

            // Cargar vista
            $rute = ROOT . "Views" . DS . $request->getControlador() . DS . $metodo . ".php";

            if ( is_readable($rute) ) {
                require_once $rute;
            } else {
                print_r("No se encontro la vista");
            }
        }
    }