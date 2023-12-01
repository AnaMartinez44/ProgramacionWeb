<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabecera con texto y Buscar Usuario</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
       .cabecera {
        background-image: url("https://shorturl.at/uPUX1");
        color: #fff;
            padding: 10px;
            text-align: center;
            display: flex;
            align-items: center;
        }

        .logo{
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


        label {
            display: block;
            margin-bottom: 8px;
        }


        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
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
<body style="background-color: #a18594;">
<body>
    <div class = "cabecera">
        <div class = "logo">
            <img 
            src="https://amei.mx/wp-content/uploads/2016/08/UNAM-FES-Aragon.png" 
            alt="Logo" 
            height="100">
            </div>
        <div class="texto">
            <p>UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO</p>
            <p>FACULTAD DE ESTUDIOS SUPERIORES ARAGÓN</p>
        </div>
    </div>

    <div id="formularioContainer">
        <h2>Buscar Usuario</h2>
        <form id="formularioBusqueda" action="FindUsuario.php" method="POST">
            <label for="nombre_usuario">Nombre de Usuario:</label>
            <input type="text" id="nombre_usuario" name="nombre_usuario" required><br>


            <input type="submit" value="Buscar Usuario">
        </form>
    </div>      

</body>

</html>