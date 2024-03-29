<?php
session_start();
//datos para establecer la conexion con la base de mysql.

require_once 'includes/funciones.php';

function formRegistro(){
?>

<form action="registro.php" method="post">
Usuario:  <input type="text" name="username" size="30" maxlength="20" /><br />
Password: <input type="password" name="userpass" size="40" maxlength="10" />
Confirma: <input type="password" name="userpass2" size="40" maxlength="10" /><br />
Email:    <input type="text" name="email" size="20" maxlength="40" /><br />
<input type="submit" value="Registrar" />
</form>
<?php
}
// verificamos si se han enviado ya las variables necesarias.
if (isset($_POST["username"])) {
   $username = $_POST["username"];
   $userpass = $_POST["userpass"];
   $userpass2 = $_POST["userpass2"];
   $email = $_POST["email"];
   // Hay campos en blanco
   if($username==NULL|$userpass==NULL|$userpass2==NULL|$email==NULL) {
      echo "un campo está vacio.";
      formRegistro();
   }else{
      // ¿Coinciden las contraseñas?
      if($userpass!=$userpass2) {
         echo "Las contraseñas no coinciden";
         formRegistro();
      }else{
         // Comprobamos si el nombre de usuario o la cuenta de correo ya existían
         $checkuser = mysql_query("SELECT usuario FROM usuarios WHERE usuario='$username'");
         $username_exist = mysql_num_rows($checkuser);
         $checkemail = mysql_query("SELECT email FROM usuarios WHERE email='$email'");
         $email_exist = mysql_num_rows($checkemail);
         if ($email_exist>0|$username_exist>0) {
            echo "El nombre de usuario o la cuenta de correo estan ya en uso";
            formRegistro();
         }else{
            $query = 'INSERT INTO usuarios (usuario, userpass, email, fecha)
            VALUES (\''.$username.'\',\''.$userpass.'\',\''.$email.'\',\''.date("Y-m-d").'\')';
            mysql_query($query) or die(mysql_error());
            echo 'El usuario '.$username.' ha sido registrado de manera satisfactoria.<br />';
            echo 'Ahora puede entrar ingresando su usuario y su userpass<br />';
            ?>
                                 //Un formulario de login, que aparesera despues de el registro fue exitoso
            <FORM ACTION="comprobar.php" METHOD="post">
              Usuario : <INPUT TYPE="text" NAME="usuario" SIZE=20 MAXLENGTH=20><br />
              Password: <INPUT TYPE="userpass" NAME="userpass" SIZE=10 MAXLENGTH=10><br />
              <INPUT TYPE="submit" VALUE="Ingresar">
            </FORM>
            <?php
         }
      }
   }
}else{
   formRegistro();
}
?>