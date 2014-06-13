<?php
    
    $idarea = 3;
    $nomarea = 'Gerencia';

    require_once 'config.php';
    require_once 'includes/security.php';
    
    $usuario = $_SESSION['usuario'];
    if($usuario['idarea'] != $idarea){
        header('location:portada.php');
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div class="menu"><?php require_once 'includes/menu.php'; ?></div>
    
        <h1>Modulo de <?php echo $nomarea ?></h1>
        <div class="acciones">
            <ul>
                <?php foreach($usuario['acciones'] as $accion){?>
                <li><a href="modulo_<?php echo $idarea?>.php?accion=<?php echo $accion['id']?>"><?php echo $accion['nombre']?></a></li>
                <?php } ?>
            </ul>
        </div>
        
        <?php
        if(isset($_GET['accion'])){
            switch ($_GET['accion']){
                case '1': echo ' <a href="sg/menuprincipal.php">REALIZAR BUSQUEDA</a>';
                    break;
                case '2': echo ' <a href="sg/regiscorresemit.php">EMITIDO</a>| <a href="sg/regiscorresrec.php">RECIBIDO</a>';
                    break;
                case '3': echo 'ELIMINAR';
                    break;
                case '4': echo ' <a href="creausuario.php">Crear Usuarios</a>';
                    break;
                case '5': echo 'ELIMINAR USUARIO';
                    break;
            }
        }
        ?>
        
    </body>
</html>