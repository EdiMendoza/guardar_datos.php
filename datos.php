<?php
// Configuración de la base de datos
$servidor = "localhost";
$usuario = "tu_usuario";
$contraseña = "tu_contraseña";
$base_datos = "turismo";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $contraseña, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$descripcion = $_POST['descripcion'];
$rol = $_POST['rol']; // Supongamos que este campo indica si es 'admin' o 'usuario'

// Verificar rol y realizar acciones según el rol
if ($rol === 'admin') {
    // Permitir al administrador guardar información sin restricciones
    $sql = "INSERT INTO clientes (nombre, email, telefono, descripcion, rol) VALUES ('$nombre', '$email', '$telefono', '$descripcion', '$rol')";
    if ($conn->query($sql) === TRUE) {
        echo "Los datos se guardaron correctamente.";
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }
} elseif ($rol === 'usuario') {
    // Permitir al usuario hacer solo reservas o cancelarlas
    if (isset($_POST['accion']) && $_POST['accion'] === 'reservar') {
        // Insertar una nueva reserva
        $sql = "INSERT INTO reservas (nombre, email, telefono, descripcion) VALUES ('$nombre', '$email', '$telefono', '$descripcion')";
        if ($conn->query($sql) === TRUE) {
            echo "La reserva se realizó correctamente.";
        } else {
            echo "Error al realizar la reserva: " . $conn->error;
        }
    } elseif (isset($_POST['accion']) && $_POST['accion'] === 'cancelar') {
        // Eliminar una reserva existente
        $sql = "DELETE FROM reservas WHERE email = '$email' AND descripcion = '$descripcion'";
        if ($conn->query($sql) === TRUE) {
            echo "La reserva se canceló correctamente.";
        } else {
            echo "Error al cancelar la reserva: " . $conn->error;
        }
    }
} else {
    echo "Permiso denegado.";
}

// Cerrar conexión
$conn->close();
?>
