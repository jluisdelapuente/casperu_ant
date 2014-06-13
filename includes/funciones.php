<?php
function getconexion() {
    $link = mysql_connect('127.0.0.1', 'proyecto', 'Proyecto2557') or die(mysql_error());
    mysql_select_db('casperu', $link) or die(mysql_error());
    return $link;
}

function login($username, $password) {
    
    $link = getconexion();
    
    $sql = "SELECT u.id, u.username, u.userpass, a.id AS idarea, a.nombre AS nomarea, r.id AS idrol, r.nombre AS nomrol
            FROM usuarios u
            LEFT JOIN areas a ON a.id=u.areas_id
            LEFT JOIN roles r ON r.id=u.roles_id
            WHERE username='$username' AND userpass='$password'";
    
    $rs = mysql_query($sql) or die(mysql_error());
    
    if($registro = mysql_fetch_array($rs)){
        
        $sql = "SELECT a.id, a.nombre 
                FROM roles_has_acciones ra
                INNER JOIN acciones a ON a.id=ra.acciones_id
                WHERE ra.roles_id = ".$registro['idrol'];
        
        $rs2 = mysql_query($sql) or die(mysql_error());
        
        $acciones = array();
        while($accion = mysql_fetch_array($rs2)){
            $acciones[] = $accion;
        }
        $registro['acciones'] = $acciones;
        
        return $registro;
    }
    return false;
}


?>
