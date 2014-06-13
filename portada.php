<?php
    require_once 'config.php';
    require_once 'includes/security.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div class="menu"><?php require_once 'includes/menu.php'; ?></div>
        <?php
        $usuario = $_SESSION['usuario'];
       // var_dump($usuario);
        ?>
        
  <h2>El Archivo Central del Ministerio del Amiente le da la bienvenida</h2>
<p><br>
    <b>MISIÓN</b>
<br>
El Archivo Central del MINAM tiene como Misión:<br>
Somos el área dedicada a custodiar y  gestionar los archivos del Ministerio del Ambiente, contando con un personal comprometido y con responsabilidad social  para proporcionar a los usuario la información que requiere en forma clara y oportuna.

<br><br><b>VISIÓN</b><br>
El Archivo Central del MINAM tiene como Visión:<br>
Implementar  un Sistema Archivistico Integrado para la gestión de los Archivos de Gestión y Periféricos a nivel institucional y para la mejora continua de nuestro servicio,  ampliando y fortaleciendo nuestra relación con las diferentes áreas del Ministerio del Ambiente.

</p>      
        
        
        
    </body>
</html>
