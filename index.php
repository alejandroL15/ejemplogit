<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Prueba</title>
</head>
<body>
    <h1>Bienvenido a la página de prueba en PHP</h1>

    <p>La fecha y hora actual es: <strong><?php echo date("d/m/Y H:i:s"); ?></strong></p>

    <form method="POST" action="">
        <label for="nombre">Alejandro</label>
        <input type="text" name="nombre" id="nombre" required>
        <button type="submit">Enviar</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST["nombre"]);
        echo "<h2>Hola, $nombre 👋</h2>";
    }
    ?>
</body>
</html>
