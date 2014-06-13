<?php

function conectarBD(){
   $link = mysql_connect("localhost","proyecto","Proyecto2557") 
   or die("<br>Problema de Conexion:</b><br /> Error Nro:".
        mysql_errno().": ". mysql_error());

   $selectBD = mysql_select_db("casperu", $link);

   if(!$selectBD) {
       die("Problemas para usar la base de datos". mysql_error($link));
   }
   return $link;
}

?>
