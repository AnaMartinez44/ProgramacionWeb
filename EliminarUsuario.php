<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Elimina a un usuario </title>
    <style>

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
        #seccion1 {
            height: 100px;
        }
        h1 {
            text-align: center;
        }

            #seccion2 {
            height: 200px;
            }

            #seccion3 {
            height: 300px;
            }     
            h3 {
            text-align: center;
        }
    </style>

</head>

<body style="background-color: #a18594;">
<div class="cabecera">
        <div class="logo">
            <img src="https://amei.mx/wp-content/uploads/2016/08/UNAM-FES-Aragon.png" alt="Logo" height="100">
        </div>
        <div class="texto">
            <p>UNIVERSIDAD NACIONAL AUTONÓMA DE MÉXICO</p>
            <p>FACULTAD DE ESTUDIOS SUPERIORES ARAGÓN</p>
          
        </div>
    </div>

    <div id="seccion1">
    <h1> Eliminar usuario</h1>
    </div>
    
    <div id="seccion2">
    <form style=" text-align: center;" method="POST" action="deleteUsuario.php">

    
        <input  type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
        <br />
        <button type="submit">Eliminar usuario</button>
        </div>
    </form>
    <div id="seccion3">
    <h1><a href="index.php">Inicio de lista</a></h1>
    </div>
</body>

</html>