<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Archivo Central - MINAM</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

</head> <?php include_once 'menuprincipal.php'; ?>
<body>

  <?php
if ( !isset($_POST['buscar']) ){
  echo "Debe indicar el DESTINO a buscar";
  echo "<p><a href=\"pursuesecre_grl_destino.php\">Volver</p> \n";
  exit;
}
?>
</p>
<p>&nbsp; </p>
<div align='center'><strong><font size='4' face='Verdana, Arial, Helvetica, sans-serif'>Resultado de la Busqueda de Registros: -DESTINO-</font></strong>
  <table width='80%' border='1' align='center' cellspacing='1' cellpadding='1' bordercolor='#0840A1'>
  <br>
</div>
<tr bgcolor='#0840A1'>

<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">Area</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">NrDoc</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">Seriedocumental</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">Fecha</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">Asunto</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">Referencia</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">Destino</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">DestinoPersona</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">INDICATIVO</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">DEPENDENCIA</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">OBSERVACIONES</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">Anio</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">Tomo</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">Folios</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">PDF</font> </th>

  
</tr>	


<?php
require_once '../includes/funcionesBD.inc.php';

$link = conectarBD();

$query = "SELECT Id, Area, NrDoc, Seriedocumental, Fecha, Asunto, Referencia, Destino, DestinoPersona, INDICATIVO, DEPENDENCIA, OBSERVACIONES, Anio, Tomo, Folios, PDF, Extra1 FROM  table_sg WHERE Destino
    LIKE '%".$_POST['buscar']."%' ORDER BY Destino";

$result = mysql_query($query, $link)
        or die('Error en el SQL: ' . mysql_error($link));
echo "<a href='pursuesecre_grl_destino.php'>Regresar</a></td></tr>";
if (mysql_num_rows($result) > 0) {

while($row = mysql_fetch_array($result)) {

echo '<tr>';

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

echo "<td><a href='../../Minam/pdfs/".$row[15]."' TARGET='_blank' >".$row[15] ."<a/></td>";


echo '</tr>';
  }
  echo "<tr><td colspan='2'><a href='pursuesecre_grl_destino.php'>Regresar</a></td></tr>";
} else {
echo "<tr><td colspan='2'>No hay registro.";
echo "<a href='pursuesecre_grl_destino.php'>Regresar</a></td></tr>";
}
?>
</table>
</body>
</html>