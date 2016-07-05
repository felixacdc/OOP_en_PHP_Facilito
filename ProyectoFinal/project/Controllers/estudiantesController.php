<?php namespace Controllers;
    
    use Models\Estudiante as Estudiante;
    use Models\Seccion as Seccion;
    /**
    * Controlador de estudiantes
    */
    class estudiantesController
    {
        private $estudiante;
        private $seccion;

        public function __construct()
        {
            $this->estudiante = new Estudiante();
            $this->seccion = new Seccion();
        }

        public function index()
        {
            $datos = $this->estudiante->listar();
            return $datos;
        }

        public function agregar()
        {
            if ( !$_POST ) {
                $datos = $this->seccion->listar();
                return $datos;
            } else {
                $permitidos = ["image/jpeg", "image/png", "image/gif", "image/jpg"];
                $limite = 700;

                // in_array — Comprueba si un valor existe en un array
                // Busca la aguja (needle) en el pajar (haystack) usando una comparación flexible a menos que esté establecido strict.
                /* needle
                El valor a buscar.

                Nota:
                Si needle es un string, la comparación se realiza considerando las mayúsculas/minúsculas.
                haystack
                El array.

                strict
                Si el tercer parámetro strict está establecido a TRUE, la función in_array() también comprobará los tipos de needle en haystack.*/
                if ( in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024 ) {
                    
                    $nombre_imagen = date('i-s') . $_FILES['imagen']['name'];
                    $ruta = "Views" . DS . "template" . DS . "imagenes" . DS . "avatars" . DS . $nombre_imagen;
                    // mover el archivo a al directorio de imagens
                    move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);

                    $this->estudiante->set("nombre", $_POST['nombre']);
                    $this->estudiante->set("edad", $_POST['edad']);
                    $this->estudiante->set("promedio", $_POST['promedio']);
                    $this->estudiante->set("imagen", $nombre_imagen);
                    $this->estudiante->set("id_seccion", $_POST['id_seccion']);
                    $this->estudiante->set("fecha", date('d/m/y'));

                    $this->estudiante->add();

                    header("Location:" . URL . "estudiantes");
                }
            }
        }

        public function editar($id)
        {
            $this->estudiante->set("id", $id);
            $datos = $this->estudiante->view();
            return $datos;
        }
    }

    // $estudiantes = new estudiantesController();