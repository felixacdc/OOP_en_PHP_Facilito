<?php namespace Config;

    /**
    * Request class
    */
    class Request
    {
        private $controlador;
        private $metodo;
        private $argumento;

        public function __construct()
        {
            if( isset($_GET['url']) ) {
                // filter_input — Toma una variable externa concreta por su nombre y opcionalmente la filtra
                // filtra elcodigo malicioso que se envia desde el exterior
                $ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
                // print_r($ruta);
                // explode — Divide un string en varios string
                // Devuelve un array de string, siendo cada uno un substring del parámetro string formado por la división realizada por los delimitadores indicados en el parámetro delimiter.
                $ruta = explode("/", $ruta);
                // print_r($ruta);
                // Recorre cada valor de array, pasándolos a la función callback. Si la función callback devuelve true, el valor actual desde array es devuelto al array resultante. Las claves del array se conservan.
                $ruta = array_filter($ruta);
                // print_r($ruta);

                // Condicion para verificar si se esta cargando el index de la pagina y si es asi que redirecciones al controlador de estudiantes
                if ( $ruta[0] == "index.php") {
                    $this->controlador = "estudiantes";
                } else {
                    // array_shift() Quita el primer valor del array y lo devuelve, acortando el array un elemento y corriendo el array hacia abajo. Todas la claves del array numéricas serán modificadas para que empiece contando desde cero mientras que los arrays con claves literales no serán modificados.
                    $this->controlador = strtolower(array_shift($ruta));
                }

                $this->metodo = strtolower(array_shift($ruta));

                if ( !$this->metodo ) {
                    $this->metodo = "index";
                }

                $this->argumento = $ruta;

                // print_r($this->metodo);
            } else {
                $this->controlador = "estudiantes";
                $this->metodo = "index";
            }
        }

        public function getControlador()
        {
            return $this->controlador;
        }

        public function getMetodo()
        {
            return $this->metodo;
        }

        public function getArgumento()
        {
            return $this->argumento;
        }
    }