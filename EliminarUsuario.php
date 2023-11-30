<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Elimina a un usuario </title>
    <style>
        

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

<body style="background-color: #aa8ab3;">
    <div id="seccion1">
    <h1> Eliminar a usuario</h1>
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