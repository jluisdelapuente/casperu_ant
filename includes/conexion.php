<?php
session_start();

ini_set("session.cookie_domain",".ascadsemastec.com");

$titulo='CORPORACI&#211;N ASCAD &#38; SEMASTEC';

$host='localhost';

$user='proyecto';

$pass='Proyecto2557';

$db='casperu';

$conexion=mysql_connect("$host","$user","$pass")or die("Error en la coneccion");

$base=mysql_select_db("$db")or die("Error en la conecxion");
?>