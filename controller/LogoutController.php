<?php
session_start(); // activamos para la sesion
session_destroy();
header("Location: ../index.php");
