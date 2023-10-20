<?php

$conexion = new mysqli("localhost","root","","foodfaster_base");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}