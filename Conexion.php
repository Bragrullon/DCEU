<?php

$server = "http://localhost";
$user = "root";
$pass = "";
$db = "datos";

$conexion = new mysqli($server, $user, $pass, $db);

if($conexion->connect_errno){

    die("Error connecting to" . $conexion->connect_errno);


}else{
    echo "conectado";
}
