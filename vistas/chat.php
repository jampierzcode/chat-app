<?php
session_start();
if (empty($_SESSION["id_usuario"])) { // empty dice: si no existe
    session_destroy();
    header("Location: ../index.php");
} else {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chat</title>
    </head>

    <body>
        <h1>Bienvenido <?php echo $_SESSION["user"] ?></h1>
        <p>Estas logueado</p>
        <a href="../controller/LogoutController.php">Cerrar Sesion</a>

    </body>

    </html>
<?php
}
?>