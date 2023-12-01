<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #a18594;
        }

        .cabecera {
            background-image: url("https://shorturl.at/uPUX1");
            color: #fff;
            padding: 10px;
            text-align: center;
            display: flex;
            align-items: center;
        }

        .logo {
            margin-right: 10px;
        }

        .texto {
            flex-grow: 1;
            text-align: center;
        }

        #formularioContainer {
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        form {
            text-align: center;
        }

        h1 {
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="cabecera">
        <div class="logo">
            <img src="https://amei.mx/wp-content/uploads/2016/08/UNAM-FES-Aragon.png" alt="Logo" height="100">
        </div>
        <div class="texto">
            <p>UNIVERSIDAD NACIONAL AUTONOMA DE MÉXICO</p>
            <p>FACULTAD DE ESTUDIOS SUPERIORES ARAGON</p>
          
        </div>
    </div>

    <div id="formularioContainer">
        <form method="post" action="NewUsuario.php">
            <h1>REGISTRO</h1>

            <label for="nombre_usuario">Nombre de Usuario:</label>
            <input type="text" id="nombre_usuario" name="nombre_usuario" required>

            <label for="no_cuenta">No Cuenta Institucional:</label>
            <input type="text" id="no_cuenta" name="no_cuenta" required>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Agregar Usuario">
        </form>
    </div>
</body>

</html>