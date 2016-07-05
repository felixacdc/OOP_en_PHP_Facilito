<?php namespace Models;

    /**
    * Conexion
    */
    class Conexion
    {
        private $datos = [
            "host" => "localhost",
            "user" => "root",
            "pass" => "",
            "db" => "proyecto"
        ];

        private $con;

        public function __construct() 
        {
            // Cuando se utilizan clases globales con namespace se coloca un slash invertido
            $this->con = new \mysqli($this->datos['host'],
                                    $this->datos['user'],
                                    $this->datos['pass'],
                                    $this->datos['db']);
        }

        public function consultaSimple($sql)
        {
            $this->con->query($query);
        }

        public function consultaRetorno($sql)
        {
            $datos = $this->con->query($sql);
            return $datos;
        }
    }