<?php
session_start();

// Verificar si el usuario ya está autenticado
if(isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit;
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establecer la conexión con la base de datos (modifica las credenciales según tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "orpheo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Obtener datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consultar la base de datos para obtener el usuario
    $sql = "SELECT id, username, password FROM user WHERE username = '$username' ";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Usuario encontrado, verificar contraseña
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Contraseña válida, iniciar sesión
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: dashboard.php");
            exit;
        } else {
            // Contraseña incorrecta
            $error_message = "Contraseña incorrecta";
            header("Location: index.php");
        }
    } else {
        // Usuario no encontrado
        $error_message = "Usuario no encontrado";
        header("Location: register.html");
        echo 'no hay user';
    }

    // Cerrar la conexión
    $conn->close();
}

?>