<?php
require_once("pdoConfig.php");
try {
    $conexion = new PDO("mysql:host=$host;dbname=$base_datos", $username, $password); // se crea una instancia osea un objeto
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "La conexion ha sido un exito";
} catch (PDOException $e) {
    echo 'La conexion ha fallado';
}
