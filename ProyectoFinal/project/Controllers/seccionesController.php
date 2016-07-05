<?php namespace Controllers;
    
    use Models\Seccion as Seccion;
    /**
    * Controlador de estudiantes
    */
    class seccionesController
    {
        private $secciones;

        public function __construct()
        {
            $this->secciones = new Seccion();
        }

        public function index()
        {
            $datos = $this->secciones->listar();
            return $datos;
        }

        public function agregar()
        {
            if ( $_POST ) {
                $this->secciones->set("nombre", $_POST['nombre']);
                $this->secciones->add();
                header("Location:" . URL . "secciones");
            }
        }

        public function editar($id)
        {
            if ( !$_POST ) {
                $this->secciones->set("id", $id);
                $datos = $this->secciones->view();
                return $datos;
            } else {
                $this->secciones->set("id", $id);
                $this->secciones->set("nombre", $_POST['nombre']);

                $this->secciones->edit();

                header("Location:" . URL . "secciones");
            }
            
        }
    }