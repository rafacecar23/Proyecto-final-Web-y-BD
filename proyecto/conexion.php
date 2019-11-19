<?php
$host="localhost";
$user = "root";
$password="";
$B_datos="poyec";

$conexion = new mysqli($host,$user,$password,$B_datos);

if ($conexion->connect_errno)
{
    $conexion->mysqli_connect_errno();
}
