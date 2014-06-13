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

<form method="post" action="upshotlogist_serie.php">
  <p>&nbsp;</p>
	  <p>&nbsp;</p>
  <table width="612" border="0">
	    <tr>
	      <td colspan="5"><div align="center"><B>BUSQUEDA POR SERIE</B></div></td>
    </tr>
	    <tr>
	      <td width="172"><strong>Ingrese Serie: </strong></td>
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
Para realizar la busqueda por SERIE DOCUMENTAL: <BR>
Se tiene que ingresar el nombre de la  Serie Documental, el cual puede ser una exprecion exacta o una sola palabra.<br>
<br>
Nota: Aqui buscara todas las series sin considerar año.<br>
Ejemplo: si se coloca Oficio, El resultado sera de todos los Oficios, de los años ingresados (2008, 2009, 2010, etc.)
</form>
</body>
</html>