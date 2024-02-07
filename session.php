<?php
session_start();

// Verificar si el usuario no está autenticado
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Mostrar el nombre de usuario
$username = $_SESSION['username'];
?>