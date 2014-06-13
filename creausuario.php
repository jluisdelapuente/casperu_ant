<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Archivo Central - MINAM</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script language="javascript">

function verifica()
{
 if (f.correo.value=="")
  {
   alert ("Por favor ingrese su correo");
   return;
  }

 f.opt.value=1;
 f.submit();
}

</script>
<style type="text/css">
.prefe {
	font-weight: bold;
	color: #00F;
	font-size: 24px;
}
body,td,th {
	color: #000;
	font-weight: bold;
}
body {
	background-color: #6CF;
}
.anuncio {
	font-size: 10px;
}
</style>
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php

$bd=mysql_connect('localhost','ascadsem_entidad','user1') or die ("No Puedo Conectarme A La Base de Datos");
mysql_select_db("minam");

$opt=$HTTP_GET_VARS["opt"];

if ($opt==1)
{
  
$areas_id=$HTTP_GET_VARS["areas_id"];  
$nombre=$HTTP_GET_VARS["nombre"];
$roles_id=$HTTP_GET_VARS["roles_id"];  
$nombres=$HTTP_GET_VARS["nombres"];
$apellidos=$HTTP_GET_VARS["apellidos"];
$cargo=$HTTP_GET_VARS["cargo"];
$username=$HTTP_GET_VARS["username"];
$userpass=$HTTP_GET_VARS["userpass"];
$correo=$HTTP_GET_VARS["correo"];

$sql="insert into userclient (areas_id, nombre, roles_id, nombres, apellidos, cargo, username, userpass, correo ) values ('".$areas_id."','".$nombre."','".$roles_id."','".$nombres."','".$apellidos."','".$cargo."','".$username."','".$userpass."','".$correo."')";           
 $res=mysql_query($sql,$bd) or die (mysql_error());
}

?>

<html><head>
<title>Ascad Sematec - registro</title>
</head>

<script language="javascript">

function verifica()
{
 if (f.correo.value=="")
  {
   alert ("Por favor ingrese su correo");
   return;
  }

 f.opt.value=1;
 f.submit();
}

</script>

<body>

<form name="f">
<div align="center">
  <p>
    <input type="hidden" name="opt">
    <span class="prefe">Registro de Usuario</span> </p>
</div>
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0">
  <tr>
      <td height="32" colspan="2">Nombres</td>
      <td colspan="3"><input type="text" name="NombresDat" size="50"></td>
    </tr>
    <tr>
      <td colspan="2">Apellidos</td>
      <td colspan="3"><input type="text" name="Apellidos" size="50"></td>
    </tr>
	    <tr>
      <td height="31" colspan="2">Usuario</td>
      <td colspan="3"><input type="text" name="nombre" size="20">
        <span class="anuncio">15 caracteres como maximo</span></td>
    </tr>
    	<tr>
      <td colspan="2">Contraseña</td>
      <td colspan="3"><input name="pass" type="password" id="password" size="20">
        <span class="anuncio">8 caracteres como mínimo</span></td>
    </tr>
	  <tr>
	    <td height="31" colspan="2">Confirmar contraseña</td>
      <td colspan="3"><span id="spryconfirm1">
        <input type="password" name="pass2" size="20">
        <span class="confirmRequiredMsg">Se necesita un valor.</span><span class="confirmInvalidMsg">Los valores no coinciden.</span></span></td>
    </tr>
	
	<tr>
      <td colspan="2">Correo</td>
      <td colspan="3"><input type="text" name="correo" size="50"></td>
    </tr>

	<tr>
      <td height="50" colspan="2">Preferencias        </td>
      <td colspan="3"><textarea name="descripcion" cols="50"></textarea></td>
    </tr>
	
	<tr>
	  <td height="26" colspan="5">&nbsp;</td>
	  </tr>
	<tr>
      <td width="97">
        <p align="center"></td>
      <td width="94"><input type="reset" value="Cancelar"></td>
      <td width="82">&nbsp;</td>
      <td width="93"><input type="button" value="Registrar" name="B3" onClick=verifica()></td>
      <td width="125">&nbsp;</td>
	   </tr>
  </table>
  </center>
</div>
</form>
<script type="text/javascript">
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "password");
</script>
</body>
</html>