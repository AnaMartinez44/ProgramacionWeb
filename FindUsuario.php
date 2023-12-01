<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Usuario</title>
</head>
<body>

<h2>Buscar Usuario</h2>

<form id="formularioBusqueda" action="procesar_buscar_usuario.php" method="POST">
    <label for="nombre_usuario">Nombre de Usuario:</label>
    <input type="text" id="nombre_usuario" name="nombre_usuario" required><br>

    <input type="submit" value="Buscar Usuario">
</form>

</body>
</html>