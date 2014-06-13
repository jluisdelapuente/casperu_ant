<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CORPORACI&#211;N ASCAD &#38; SEMASTEC</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #696;
}
</style>
</head> <?php include_once 'menuprincipal.php'; ?>

<body>
	
<form method="post" action="upshotlogist_fech.php">
  <p>&nbsp;</p>
	  <p>&nbsp;</p>
  <table width="728" border="0">
	    <tr>
	      <td colspan="5"><div align="center"><B>BUSQUEDA POR FECHA</B></div></td>
    </tr>
	    <tr>
	      <td width="309"><strong>Ingrese Fecha: (dd/mm/aaaa)</strong></td>
	      <td colspan="2"><input type="text" name="buscar" size="30"></td>
	      <td width="54"><input type="submit" value="Buscar" /></td>
	      <td width="113"><input type="reset" value="Limpiar" /></td>
        </tr>
	    <tr>
	      <td>&nbsp;</td>
	      <td width="1">&nbsp;</td>
	      <td width="229">&nbsp;</td>
	      <td colspan="2">&nbsp;</td>
        </tr>
      </table>
          
Forma de Busqueda: Para realizar la busqueda por FECHA, Se tiene que ingresar la Fecha, con el siguiente formato: dia/mes/año<br>
<br>Ejemplo:<br>
<br>05/06/2009  buscar el 05 de Junio del 2009<br>
21/11/2009  buscar el 21 de Noviembre del 2009<br>
<br>Si solo se coloca el año (2010, 2012, etc.) se buscara todo lo que sean de ese año.<br><br>
Nota: No se recomienda colocar un numero. pues buscara todas las ferencias que tenga ese numero.<br>
La búsqueda seria por año, mes, día 
Si coloca 08; 09; 10; 11, 12 buscara el año que exista en la base.<br>
Si no encuentra el año, buscara el mes, y si esta fuera de rango buscara por día.<br>
<br>Ejemplo:<br>Si se coloca el numero 12 y como hay informacion del año 2012, lo que buscara sera el mes de Diciembre.<br>
Si coloca los numeros fuera de los rangos de mes, buscara por fecha, si coloca 25, buscara todos los registros que esten en la fecha 25 no importandole el mes o año<br>
Rangos Años 2008, 2009, 2010, 2011 (08, 09, 10, 11)
Rango Mes 01, 02, 03, 04, 05, 06, 07, 12)
Rango Día los no indicados anteriormente hasta el 31          
</form>
</body>
</html>