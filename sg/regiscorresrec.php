<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MINAM - Archivo Central</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />



<style type="text/css">
body {
	background-color: #AA0000;
}
</style>
<?php require_once 'menuprincipal.php';?>
<br>
<body bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
<h2>REGISTRAR - CORRESPONDENCIA - RECIBIDA</h2>
<div id="f">

<FORM ACTION="mailto:direcci�n_de_email" METHOD="POST"  ENCTYPE="TEXT/PLAIN">
<b>Recibido de:</b><INPUT size="115" TYPE="text" NAME="Documentos"> 
</FORM>


<FORM ACTION="mailto:direcci�n_de_email" METHOD="POST" ENCTYPE="TEXT/PLAIN">
<b>Serie Documental</b> - Correspondencia
<SELECT NAME="ColorPreferido"> 
<OPTION>Seleccionar el tipo de Correspondencia</OPTION>
<OPTION>Carta</OPTION>
<OPTION>Carta multiple</OPTION>
<OPTION>Informe</OPTION>
<OPTION>Memorando</OPTION>
<OPTION>Memorando multiple</OPTION>
<OPTION>Oficio</OPTION>
<OPTION>Oficio multiple</OPTION>
<OPTION>Resoluciones</OPTION>
</SELECT > 

<b>Unidad de Conservación</b>
<SELECT NAME="ColorPreferido"> 
<OPTION>Tipo:</OPTION>
<option value="Anillado"> Anillado</option>
<option value="Archivador de palanca"> Archivador de palanca</option>
<option value="Caja"> Caja</option>
<option value="Colector"> Colector</option>
<option value="Folder manila"> Folder manila</option>
<option value="Folder pl�stico"> Folder plástico</option>
<option value="Legajo"> Legajo</option>
<option value="Paquete"> Paquete</option>
<option value="Pioner"> Pioner</option>
<option value="Tomo"> Tomo</option>
</option>

</SELECT > 
</FORM></FORM>


<table  width="75%" border="1" cellspacing="0" cellpadding="4">
	<tr>
		<!-- Row 1 Column 1 -->
		<td >
			<b>
<form method="post" action="test.php">
  Año :<br />
  <input type="radio" name="equipo" id="bcn"   value="b"> 	<label for="bcn">2013</label><br>
  <input type="radio" name="equipo" id="bcn"   value="b"> 	<label for="bcn">2012</label><br>
  <input type="radio" name="equipo" id="bcn"   value="b"> <label for="bcn">2011</label><br>
  <input type="radio" name="equipo" id="bcn"   value="b"> 	<label for="bcn">2010</label><br>
   
</form>
<FORM ACTION="mailto:direcci�n_de_email" METHOD="POST" ENCTYPE="TEXT/PLAIN">
<b>Mas...</b> 
<SELECT NAME="ColorPreferido"> 
<OPTION>Año</OPTION>
<OPTION>2009</OPTION>
<OPTION>2008</OPTION>
<OPTION>2007</OPTION>
<OPTION>2006</OPTION>
<OPTION>2005</OPTION>
<OPTION>2004</OPTION>
<OPTION>2003</OPTION>
<OPTION>2002</OPTION>
<OPTION>2001</OPTION>
<OPTION>2000</OPTION>
<OPTION>1999</OPTION>
<OPTION>1998</OPTION>
<OPTION>1997</OPTION>
<OPTION>1996</OPTION>
<OPTION>1995</OPTION>
<OPTION>1994</OPTION>
<OPTION>1993</OPTION>
<OPTION>1992</OPTION>
<OPTION>1991</OPTION>
<OPTION>1990</OPTION>
<OPTION>1989</OPTION>
<OPTION>1988</OPTION>
<OPTION>1987</OPTION>
<OPTION>1986</OPTION>
<OPTION>1985</OPTION>
</SELECT > 
</FORM>
</td>
<td >
</form>
<FORM ACTION="mailto:direcci�n_de_email" METHOD="POST"  ENCTYPE="TEXT/PLAIN">
<b>N° de Docuemento:</b><INPUT TYPE="text" NAME="Documentos"> 
</FORM>

<table  width="75%" border="0" cellspacing="0" cellpadding="4">
	<tr>
		<!-- Row 1 Column 1 -->
		<td >
			<b>
<b>Asunto :</b><textarea name="comentario" rows="5" cols="75"></textarea><br>
<b>Referncia :</b><textarea name="comentario" rows="5" cols="75"></textarea>
		</td>
	</tr>
</table>
	</b>
		</td>
		<!-- Row 1 Column 2 -->
		<td >
<script language='javascript' src="popcalendar.js"></script> 
</head>
<body>


<form name="form1" method="post">
<b>Fecha de Ingreso:</b><input name="nombre_de_la_caja" type="text" id="dateArrival" onClick="popUpCalendar(this, form1.dateArrival, 'mm-dd-yyyy');" size="10">
        </form>

		</td>
	</tr>
</table>
<br>

<table  width="75%" border="1" cellspacing="0" cellpadding="4">
	<tr>
		<!-- Row 1 Column 1 -->
		<td >
			<b>
<FORM ACTION="mailto:direcci�n_de_email" METHOD="POST" ENCTYPE="TEXT/PLAIN">
<b>Destino:</b>  <br>
<TEXTAREA NAME="Comentarios" ROWS="2" COLS="40"> 
</TEXTAREA> 
</FORM>
			</b>
		</td>
		<!-- Row 1 Column 2 -->
		<td >
<FORM ACTION="mailto:direcci�n_de_email" METHOD="POST" ENCTYPE="TEXT/PLAIN">
<b>Destinatario:</b>  <br>
<TEXTAREA NAME="Comentarios" ROWS="2" COLS="40"> 
</TEXTAREA> 
</FORM>
		</td>
		<!-- Row 1 Column 3 -->
		<td >
<FORM ACTION="mailto:direcci�n_de_email" METHOD="POST" ENCTYPE="TEXT/PLAIN">
<b>Folios:</b>  <br>
<TEXTAREA NAME="Comentarios" ROWS="1" COLS="8"> 
</TEXTAREA> 
</FORM>
		</td>
	</tr>
</table>
<br>

<form method="post" action="test.php">
  <label for="datafile">Subir archivo:</label>
  <input type="file" name="datafile" id="datafile" size="20" />

  <b>N° de Registro:</b><INPUT size="5" TYPE="text" NAME="Documentos"> 
  
  </form>



<FORM method="post" action="test.php">
<b>Observaciones:</b>  <br>
<TEXTAREA NAME="Comentarios" ROWS="3" COLS="100"> 
</TEXTAREA> 
</FORM>

<fieldset style="width:70%" "border: 3px" ><legend><b>Ubicacion topografica: </b></legend>

<SELECT NAME="ColorPreferido"> 
<OPTION>Repositorio:</OPTION>
<OPTION>S-1</OPTION>
<OPTION>S-2</OPTION>
<OPTION>S-3</OPTION>
<OPTION>S-4</OPTION>
<OPTION>S-5</OPTION>
</SELECT > 
</FORM>

Caja:</b><input size="3" name="Nombre" type="text">
<SELECT NAME="ColorPreferido"> 
<OPTION>F-01</OPTION>
<OPTION>F-02</OPTION>
<OPTION>F-03</OPTION>
<OPTION>F-04</OPTION>
<OPTION>F-05</OPTION>
<OPTION>F-06</OPTION>
<OPTION>F-07</OPTION>
<OPTION>F-08</OPTION>
<OPTION>F-09</OPTION>
<OPTION>F-10</OPTION>
<OPTION>F-11</OPTION>
<OPTION>F-12</OPTION>
<OPTION>F-13</OPTION>
<OPTION>F-14</OPTION>
<OPTION>F-15</OPTION>
<OPTION>F-16</OPTION>
<OPTION>F-17</OPTION>
<OPTION>F-18</OPTION>
<OPTION>F-19</OPTION>
<OPTION>F-20</OPTION>
<OPTION>F-21</OPTION>
<OPTION>F-22</OPTION>
<OPTION>F-23</OPTION>
<OPTION>F-24</OPTION>
<OPTION>F-25</OPTION>
<OPTION>F-26</OPTION>
<OPTION>F-27</OPTION>
<OPTION>F-28</OPTION>
<OPTION>F-29</OPTION>
<OPTION>F-30</OPTION>
<OPTION>F-31</OPTION>
<OPTION>F-32</OPTION>
<OPTION>F-33</OPTION>
<OPTION>F-34</OPTION>
<OPTION>F-35</OPTION>
<OPTION>F-36</OPTION>
<OPTION>F-37</OPTION>
<OPTION>F-38</OPTION>
<OPTION>F-39</OPTION>
<OPTION>F-40</OPTION>
<OPTION>F-41</OPTION>
<OPTION>F-42</OPTION>
<OPTION>F-43</OPTION>
<OPTION>F-44</OPTION>
<OPTION>F-45</OPTION>
<OPTION>F-46</OPTION>
<OPTION>F-47</OPTION>
<OPTION>F-48</OPTION>
<OPTION>F-49</OPTION>
<OPTION>F-50</OPTION>
</SELECT > 
</FORM>


<SELECT NAME="ColorPreferido"> 
<OPTION>cuerpo</OPTION>
<OPTION>C-A</OPTION>
<OPTION>C-B</OPTION>
<OPTION>C-D</OPTION>
<OPTION>C-E</OPTION>
<OPTION>C-F</OPTION>
</SELECT > 
</FORM>


<SELECT NAME="ColorPreferido"> 
<OPTION>Balda:</OPTION>
<OPTION>B-1</OPTION>
<OPTION>B-2</OPTION>
<OPTION>B-3</OPTION>
<OPTION>B-4</OPTION>
<OPTION>B-5</OPTION>
<OPTION>B-6</OPTION>
<OPTION>B-7</OPTION>
<OPTION>B-8</OPTION>

</SELECT > 
</FORM>


<SELECT NAME="ColorPreferido"> 
<OPTION>Posicion:</OPTION>
<OPTION>P-1</OPTION>
<OPTION>P-2</OPTION>
<OPTION>P-3</OPTION>
<OPTION>P-4</OPTION>
<OPTION>P-5</OPTION>
</SELECT > 
</FORM>

</center> 
</FIELDSET><P>


<tr valign="top">
	<td>
		<input value="Registrar - Grabar" type="reset">
	</td>
	<td>
	
	</td>
	<td align="right">
<input type="button" value="Restaurar" onClick="Limpiar();" />
	</td>
</tr>




<script type="text/javascript">
function Limpiar() {
var t = document.getElementById("f").getElementsByTagName("input");
for (var i=0; i<t.length; i++) {
    t[i].value = "";
    }
}
</script>

<form action="mailto:yo@miservidor.com" method="post" enctype="text/plain" name="miform">
  <input type="hidden" name="contrase�a" value="123ABC">
</form>
</head>