<?php
session_start();
include_once('defines2.php');

if (!isset($_SESSION['lo']))
{
  header('location:adm.php');
}else{
  if ($_SESSION['lo']!=PALABRA_CLAVE)
  {
    header('location:adm.php');
  }
}
?>