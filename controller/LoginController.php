<?php
require_once "../modelo/Conexion.php";
session_start(); // genera una activacion para crear sesiones

// RECIBIR LOS METODOS

// POST
// $email = $_POST["email"];
$email = $_POST["email"];
$password = $_POST["password"];


// conectandose a la base de datos para ver si existe un usuario

// VALIDACION EN PDO -> consultas preparadas

// crear mi consulta en $sql
$sql = "SELECT * FROM usuario WHERE email = :email AND password= :password";
// preaparabamos la consulta
$prepare = $conexion->prepare($sql);
$prepare->execute(array(':email' => $email, ':password' => $password));
$usuario = $prepare->fetchAll(PDO::FETCH_OBJ);

if (!empty($usuario)) {
    // CREAR UNA SESION -> PARA EFECTO DE LOGIN
    // $_SESSION[""]
    foreach ($usuario as $datos) {
        $_SESSION["id_usuario"] = $datos->id_usuario;
        $_SESSION["user"] = $datos->nombres;
    }
    header("Location: ../vistas/chat.php");
} else {
    header("Location: ../index.php");
}


    // $_POST["password"]; ...


    // Registrar, crear algo nuevo
    // paso parametros: validacion o para registrar



// GET
    // obtener algo, obterner muchos registros, usuarios ....
