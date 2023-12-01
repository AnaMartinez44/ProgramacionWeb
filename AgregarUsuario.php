<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar a un usuario </title>
   
</head>
<body style="background-color: #aa8ab3;">
    <form method= "post" action="NewUsuario.php" name=lolo>
        <h1> REGISTRO </h1>
       
        <label for="nombre_usuario">Nombre de Usuario:</label>
        <input type="text" id="nombre_usuario" name="nombre_usuario" required><br>
        <label for="no_cuenta">No Cuenta Institucional:</label>
        <input type="text" id="no_cuenta" name="no_cuenta" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Agregar Usuario">
        
    </form>
    </body>
   

</html>