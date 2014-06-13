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
	
<form method="post" action="upshotlogist_prov.php">
  <p>&nbsp;</p>
	  <p>&nbsp;</p>
  <table width="612" border="0">
	    <tr>
	      <td colspan="5"><div align="center"><B>BUSQUEDA POR PROVEEDOR</B></div></td>
    </tr>
	    <tr>
	      <td width="172"><strong>Ingrese Proveedor: </strong></td>
	      <td colspan="2"><input type="text" name="buscar" size="30"></td>
	      <td width="84"><input type="submit" value="Buscar" /></td>
	      <td width="109"><input type="reset" value="Limpiar" /></td>
        </tr>
	    <tr>
	      <td>&nbsp;</td>
	      <td width="138">&nbsp;</td>
	      <td width="87">&nbsp;</td>
	      <td colspan="2">&nbsp;</td>
        </tr>
      </table>
Forma de Busqueda:<br>
Para realizar la busqueda por PROVEEDOR: <BR>
Se tiene que ingresar el proveedor, el cual puede ser una exprecion exacta o una sola palabra.<br>
<br>
Ejemplo:
<br>
Se recomienda que sea una expresión exacta Ejemplo: "LUZ DEL SUR S.A " El sistema 
buscara la expresión exacta, si solo coloca una de la palabras ejemplo: “LUZ” el sistema buscara 
en toda la base todos los registro que contengan 
la palabra “LUZ” y la búsqueda será de mayor registros
En este caso el resultado será de 326 registros, de todos los años.
<br><br>
</form>
</body>
</html>