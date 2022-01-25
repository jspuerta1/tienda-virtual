<?php

use function PHPSTORM_META\elementType;

$server ="localhost";
$user="root";
$pass="";
$db="tienda_virtual";
$conexion= new mysqli($server,$user,$pass,$db);
if($conexion->connect_errno){
    die("La conexion ha fallado".$conexion->connect_errno);
}else{
    echo "conexion exitosa";
}