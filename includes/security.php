<?php
if(!isset($_SESSION['usuario'])){
    header('location:index.php?error=2');
}
?>
