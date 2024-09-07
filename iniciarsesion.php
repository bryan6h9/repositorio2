<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Asegurarse de que no hay espacios en blanco adicionales y escapar datos
    $correo = mysqli_real_escape_string($cone, trim($_POST['emailform']));
    $contra = mysqli_real_escape_string($cone, trim($_POST['contraform']));

    // Verificar datos para depuración
    echo "Correo: $correo<br>";
    echo "Contraseña: $contra<br>";

    $sql = "SELECT * FROM registro WHERE correo='$correo' AND contraseña='$contra'";
    $result = mysqli_query($cone, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            // Inicio de sesión exitoso
            $row = mysqli_fetch_assoc($result);
            $_SESSION['correo'] = $correo;
            $_SESSION['nombre'] = $row['nombre'];
            echo "Inicio de sesión exitoso"; // Mensaje de depuración
            var_dump($row); // Verificar datos obtenidos
            header("location: index.html");
            exit;
        } else {
            echo "Correo o contraseña incorrectos";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($cone);
    }

    mysqli_free_result($result);
}

mysqli_close($cone);
?>