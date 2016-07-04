<?php 
    
    require_once "Config/Autoload.php";

    Config\Autoload::run();

    $student = new Models\Estudiante();
    $student->set("id", 1);
    $data = $student->view();
    print $data['nombre'];