<?php
session_start();
if (!empty($_SESSION["id_usuario"])) {
    header("Location: vistas/chat.php");
} else {


?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

        <link rel="stylesheet" href="css/style.css">
        <title>Chat App</title>
    </head>

    <body>
        <div class="aplicacion_login">
            <div class="content_login">
                <img src="img/logo.jpeg" alt="logo_chat">
                <form class="formulario_login" action="controller/LoginController.php" method="POST">
                    <div class="componente_input">
                        <h1>Usuario</h1>
                        <div class="input_content">
                            <i class="far fa-user"></i>
                            <input name="email" type="text" placeholder="Ingresa tu correo electronico">
                        </div>
                    </div>
                    <div class="componente_input">
                        <h1>Contraseña</h1>
                        <div class="input_content">
                            <i class="fas fa-lock"></i>
                            <input name="password" type="password" placeholder="Ingresta tu contraseña">
                        </div>
                    </div>
                    <button type="submit">Iniciar Sesion</button>
                </form>
            </div>
        </div>
    </body>

    </html>

<?php
}
?>