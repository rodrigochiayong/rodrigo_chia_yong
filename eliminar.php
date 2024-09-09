<?php
$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";
// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}
// Obtener el ID a eliminar
$id_eliminar = $_POST['id_eliminar'];
// Eliminar el usuario con el ID proporcionado
$sql = "DELETE FROM usuarios WHERE id=$id_eliminar";
if ($conn->query($sql) === TRUE) {
    echo "Usuario eliminado correctamente.";
} else {
    echo "Error al eliminar usuario: " . $conn->error;
}
// Cerrar la conexión a la base de datos
$conn->close();
?>
