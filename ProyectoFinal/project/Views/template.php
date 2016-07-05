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
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
</head>
<body>
<?php         
        }

        public function __destruct()
        {
?>
</body>
</html>
<?php
        }
    }
?>