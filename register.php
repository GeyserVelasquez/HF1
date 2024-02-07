<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orfeo</title>
    <link rel="stylesheet" href="style/register.css">
</head>
<body>

    <main>
        <h1>Orpheus</h1>
        <form id="registerForm" method="POST" action="register.php">
            <div class="input-group">
                <label class="etiqueta">Nombre</label>
                <input class="boton datos" type="text" name="name" placeholder="" value="" autocomplete="off">
            </div>

            <div class="input-group">
                <label class="etiqueta">Apellido</label>
                <input class="boton datos" type="text" name="lastname" placeholder="" value="" autocomplete="off">
            </div>

            <div class="input-group">
                <label class="etiqueta">Usuario</label>
                <input class="boton datos" type="text" name="username" placeholder="" value="" autocomplete="off">
            </div>

            <div class="input-group">
                <label class="etiqueta">Rol</label>
                <select name="rol" class="boton datos">
                    <option value="opcion1">Mesero</option>
                    <option value="opcion2">Cocinero</option>
                    <option value="opcion3">Cajero</option>
                </select>
            </div>

            <div class="input-group">
                <label class="etiqueta">Contraseña</label>
                <input class="boton datos" type="password" name="password" placeholder="" value="">
            </div>

            <div class="input-group">
                <label class="etiqueta">Verificar Contraseña</label>
                <input class="boton datos" aria-placeholder="password" type="password" name="verifyword" placeholder="" value="">
                <p id="mensaje"></p>
            </div>

            <input class="boton" onclick="verificarContrasenas()" type="submit" name="sign-in" value="Registrarse">
            <br>
            <a class="etiqueta" href="index.html"> Ya tengo una cuenta </a>

        </form>
    </main>
    <script>

        function verificarContrasenas() {
            // Obtener los valores de las contraseñas
            var password = document.getElementByName("password").value;
            var confirmPassword = document.getElementByName("verifyword").value;
            console.log("Password: " + password);
            console.log("Confirm Password: " + confirmPassword);

            if (password != confirmPassword) {
                alert("Please enter valid password");
            }

            // Verificar si las contraseñas coinciden
            if (password == confirmPassword) {
                alert("Registro exitoso");
            } else {
                // Las contraseñas no coinciden, mostrar un mensaje de error
                alert("Las contraseñas no coinciden. Por favor, inténtalo de nuevo.");
            }
        }

    </script>
</body>

</html>
