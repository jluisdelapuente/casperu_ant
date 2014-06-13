<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ascad Semastec </title>
<title>CORPORACI&#211;N ASCAD &#38; SEMASTEC</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

</head> <?php include_once 'menuprincipal.php'; ?>


<body>

  <?php
if ( !isset($_POST['buscar']) ){
  echo "Debe indicar un nombre de Alumno a buscar";
  echo "<p><a href=\"pursuelogist_concp.php\">Volver</p> \n";
  exit;
}
?>
</p>
<p>&nbsp; </p>
<div align='center'><strong><font size='4' face='Verdana, Arial, Helvetica, sans-serif'>Resultado de la Busqueda de Registros: - CONCEPTO -</font></strong>
  <table width='80%' border='1' align='center' cellspacing='1' cellpadding='1' bordercolor='#0840A1'>
  <br>
</div>
<tr bgcolor='#0840A1'>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> id</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> Norden</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> SerieDoc</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> Concepto</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> Proveedor</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> NExpSIAF</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> Fecha</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> FecOtoBPro</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> Monto</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> TipoProceso</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> Ncontrato</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> Convocatoria</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> Objeto</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> Ncaja</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> Nexpediente</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> CntFolios</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> anio</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> PDF</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF"> OBSERVACIONES</font> </th>
  
	


<?php
require_once '../includes/funcionesBD.inc.php';
$link = conectarBD();

$query = "SELECT id, Norden, SerieDoc, Concepto, Proveedor, NExpSIAF, Fecha, FecOtoBPro, Monto, TipoProceso, Ncontrato, Convocatoria, Objeto, Ncaja, Nexpediente, CntFolios, Anio, PDF, OBSERVACIONES FROM  tabla_amc WHERE Concepto
    LIKE '%".$_POST['buscar']."%' ORDER BY Concepto";

$result = mysql_query($query, $link)
        or die('Error en el SQL: ' . mysql_error($link));

if (mysql_num_rows($result) > 0) {

while($row = mysql_fetch_array($result)) {



echo '<tr>';
echo '<td>'. $row['id'] .'</td>';
echo '<td>'. $row[1] .'</td>';
echo '<td>'. $row[2] .'</td>';
echo '<td>'. $row[3] .'</td>';
echo '<td>'. $row[4] .'</td>';
echo '<td>'. $row[5] .'</td>';

echo '<td>'. $row[6] .'</td>';
echo '<td>'. $row[7] .'</td>';
echo '<td>'. $row[8] .'</td>';
echo '<td>'. $row[9] .'</td>';
echo '<td>'. $row[10] .'</td>';

echo '<td>'. $row[11] .'</td>';
echo '<td>'. $row[12] .'</td>';
echo '<td>'. $row[13] .'</td>';
echo '<td>'. $row[14] .'</td>';
echo '<td>'. $row[15] .'</td>';

echo '<td>'. $row[16] .'</td>';
echo '<td>'. $row[17] .'</td>';

echo "<td><a href='../../Minam/pdfs/".$row[17]."' TARGET='_blank' >".$row[17] ."<a/></td>";

echo '<td>'. $row[18] .'</td>';

echo '</tr>';
  }
  echo "<tr><td colspan='2'><a href='pursuelogist_concp.php'>Regresar</a></td></tr>";
} else {
echo "<tr><td colspan='2'>No hay registro.";
echo "<a href='pursuelogist_concp.php'>Regresar</a></td></tr>";
}
?>
</table>
</body>
</html>