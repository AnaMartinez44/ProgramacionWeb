<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre_usuario = $_POST["nombre_usuario"];

    $consulta_sql = "SELECT * FROM persona WHERE nombre_usuario = '$nombre_usuario'";
    $resultado = $conexion->query($consulta_sql);

    if ($resultado->num_rows > 0) {
   
        while ($row = $resultado->fetch_assoc()) {
            echo "<h2>Usuario encontrado:</h2>";
            echo "<p>Nombre de Usuario: " . $row["nombre_usuario"] . "</p>";
            echo "<p>No Cuenta Institucional: " . $row["no_cuenta"] . "</p>";
        }
    } else {
        echo "<h2>Usuario no encontrado</h2>";
    }
    $conexion->close();
}
?>