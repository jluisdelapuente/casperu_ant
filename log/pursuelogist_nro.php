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
	
<form method="post" action="upshotlogist_nro.php">
  <p>&nbsp;</p>
	  <p>&nbsp;</p>
  <table width="612" border="0">
	    <tr>
	      <td colspan="5"><div align="center"><B>BUSQUEDA POR PROCESO</B></div></td>
    </tr>
	    <tr>
	      <td width="172"><strong>Ingrese N&deg; de Proceso: </strong></td>
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
Forma de Busqueda:<br><br>
Para realizar la busqueda por NUMERO DE DOCUMENTO: 
Se tiene que ingresar el Numero de Documento, el cual puede ser una exprecion exacta.<br><br>
Se ingresa el nombre del documento (guion) el numero (guion) año
<br><br>
Buscar: Oficio Ejemplo: <b>ads-002-2010</b> (aquí buscara el ads 002 del año 2010)<br><br>
Buscar: Carta Ejemplo: <b>amc-221-2011</b> (aquí buscara la amc 221 del año 2011)<br><br>
Buscar: Orden de Compra 167 año 2010 Modo de Buscqueda: <b>OC-0000167-2010</b> <br>
Resultado de la Busqueda es la Orden de Compra 167 del año 2010<br><br>
<br>

Nota: No se recomienda colocar un numero. pues buscara todas las ferencias que tenga ese numero.

</form>
</body>
</html>