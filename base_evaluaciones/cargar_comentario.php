<?php
// Incluir la cadena de conexión
include 'conexion.php';

// Recibir los datos del formulario
$nombre      = $_POST['nombre'];
$apellido    = $_POST['apellido'];
$email       = $_POST['email'];
$comentarios = $_POST['comentarios'];

// Insertar en las columnas exactas de la tabla 'comentarios'
$query = "INSERT INTO comentarios (nombre, apellido, correo, comentario) VALUES ('$nombre', '$apellido', '$email', '$comentarios')";
mysqli_query($conexion, $query);

// Redireccionar a comentarios.php con el parámetro de confirmación
header("Location: comentarios.php?ok=1");
exit();
?>