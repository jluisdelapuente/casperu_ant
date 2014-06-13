<?php
session_start();
session_destroy();

unset($_SESSION['lo']);
header('location:http://192.168.1.150/casperu/');
exit();

?>