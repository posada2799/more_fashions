<?php
// 1. Configuración de la conexión (Capa de Datos)
$servidor = "localhost";
$usuario = "root";
$password = ""; // En XAMPP por defecto es vacío
$db = "more_fashions";

$conexion = mysqli_connect($servidor, $usuario, $password, $db);

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// 2. Captura de datos (Integración de módulos)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $pass = $_POST['password'];
    $fecha_nac = $_POST['fecha_nacimiento'];

    // 3. Seguridad: Cifrado de contraseña (Requisito GA8)
    $pass_cifrada = password_hash($pass, PASSWORD_BCRYPT);

    // 4. Insertar en la base de datos
    $sql = "INSERT INTO usuarios (nombre, apellido, correo, telefono, password, fecha_nacimiento) 
            VALUES ('$nombre', '$apellido', '$correo', '$telefono', '$pass_cifrada', '$fecha_nac')";

    if (mysqli_query($conexion, $sql)) {
        // Alerta de éxito que verás en el navegador
        echo "<script>
                alert('¡Cuenta creada con éxito en More Fashions!');
                window.location.href='index.html';
              </script>";
    } else {
        echo "Error al registrar: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>