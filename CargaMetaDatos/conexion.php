<?php
$mysqli = new mysqli('localhost','root', '', 'cargaxls');
if($mysqli->connect_errno){
    echo 'Fallo de Conexion'. $mysqli->connect_error.
    die( );
}
?>