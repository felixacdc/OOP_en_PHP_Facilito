<?php 
    
    // Constantes definidas:
    // lo que hace es mostrar la manera en la que se separan las carpetas. Por ejemplo. En Windows es \ en Linux es /....
    define('DS', DIRECTORY_SEPARATOR);
    // Contiene la ruta de los archivos que nosotros estaremos llamando
    define('ROOT', realpath(dirname(__FILE__)) . DS);
    // Estas constantes se utilizan porque nosotros estaremos trabajando con URLs amigables

    require_once "Config/Autoload.php";

    Config\Autoload::run();
    Config\Enrutador::run(new Config\Request());