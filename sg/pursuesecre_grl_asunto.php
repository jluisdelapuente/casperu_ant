<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Archivo Central - MINAM</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #696;
}
</style>
</head> <?php include_once 'menuprincipal.php'; ?>

<body>
	
<form method="post" action="upshotsecre_grl_asunto.php">
  <p>&nbsp;</p>
	  <p>&nbsp;</p>
  <table width="612" border="0">
	    <tr>
	      <td colspan="5"><div align="center"><B>BUSQUEDA POR ASUNTO</B></div></td>
    </tr>
	    <tr>
	      <td width="172"><strong>Ingrese el ASUNTO: </strong></td>
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
Para realizar la busqueda por ASUNTO: <BR>
Se tiene que ingresar el asunto, el cual puede ser una exprecion exacta o una sola palabra.<br>
<br>
Ejemplo:
<br>
Se recomienda que sea una expresión exacta Ejemplo: "OPINION SOBRE LA PUBLICACION INIA TIENE PODER SANCIONADOR PARA LOS TRANSGENICOS" El sistema buscara la expresión exacta, si solo coloca una de la palabras ejemplo: “OPINION” el sistema buscara en toda la base todos los registro que contengan la palabra “OPINION” y la búsqueda será de mayor registros
En este caso el resultado será de 326 registros, de todos los años.
<br><br>

<table border="1"> 
<tr> 
<th>Incorrepto</th> 
<th> Correcto</th> 
<th>Incorrepto</th> 
<th> Correcto </th> 
</tr> 
<tr> 
<td>acción </td> 
<td>accion</td> 
<td>ACCIÓN </td> 
<td>ACCION </td> 
</tr> 

<tr> 
<td>Opinión </td> 
<td>Opinion</td> 
<td>OPINIÓN  </td> 
<td>OPINION</td> 
</tr> 

<tr> 
<td>Comisión</td> 
<td>Comision</td> 
<td>COMISIÓN </td> 
<td>COMISION</td> 
</tr> 

</table>
<br>

Nota: No se recomienda colocar una letra o una palabra. pues buscara todas las ferencias que tenga esa letra.<br>
Se puede utilizar Minúscula o mayúsculas, la búsqueda se realizara.
</form>
</body>
</html>