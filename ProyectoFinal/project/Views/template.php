<?php namespace Views;

    $template = new Template();

    /**
    * Plantilla
    */
    class Template
    {
        public function __construct()
        {
?>
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title>Proyecto del curso</title>
                    <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
                    <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/my.css">
                </head>
                <body>
                    <nav class="navbar navbar-default navbar-fixed-top">
                        <div class="container-fluid">
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <a class="navbar-brand" href="#">Administración de Estudiantes</a>
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav">
                                <li class="active"><a href="<?php echo URL; ?>">Inicio </a></li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Estudiantes <span class="caret"></span></a>
                                  <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo URL; ?>estudiantes">Listado</a></li>
                                    <li><a href="<?php echo URL; ?>estudiantes/agregar">Agregar</a></li>
                                  </ul>
                                </li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Secciones <span class="caret"></span></a>
                                  <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo URL; ?>secciones">Listado</a></li>
                                    <li><a href="<?php echo URL; ?>secciones/agregar">Agregar</a></li>
                                  </ul>
                                </li>
                              </ul>
                              <ul class="nav navbar-nav navbar-right">
                                <li><a href="http://felixacdc.github.io">Félix Méndez</a></li>
                              </ul>
                            </div>
                        </div>
                    </nav>

<?php         
        }

        public function __destruct()
        {
?>
                    <footer class="navbar-fixed-bottom text-center">
                        Todos los derechos reservados & 2016 <br>
                        Félix Méndez ~ pfmata01@gmail.com | <b>Freelancer</b>
                    </footer>
                    <script src="<?php echo URL; ?>Views/template/js/jquery.js"></script>
                    <script src="<?php echo URL; ?>Views/template/js/bootstrap.js"></script>
                </body>
            </html>
<?php
        }
    }
?>