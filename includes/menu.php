<div id="left">
<?php
    $usuario = $_SESSION['usuario'];?>
 

<ul>
    <li><a href="portada.php">Portada</a></li>
</ul>
<ul>
    <li><a href="modulo_<?php echo $usuario['idarea'] ?>.php"><?php echo $usuario['nomarea'] ?></a></li>
</ul>
<ul>
    <li><a href="logout.php">Salir</a></li>
</ul>

</div>

