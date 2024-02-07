<?php 
    require 'session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orfeo</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <main>
        <h1>Orpheus</h1>
        <h2>Bienvenido, <?php echo $username; ?>!</h2>
        <a id="logout" href="logout.php">Cerrar sesión</a>
    </main>
</script>
</body>
</html>