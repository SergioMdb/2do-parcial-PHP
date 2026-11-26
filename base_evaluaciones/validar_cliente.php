<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if ($email === 'sergio2004blanco@gmail.com' && $password === '2004') {
    $_SESSION['clientes'] = $email;
    header("Location: clientes.php");
    exit();
} else {
    echo "<p>Error: El correo electrónico o la contraseña ingresados son incorrectos.</p>";
    echo '<p><a href="clientes.php">Volver a intentar</a></p>';
}
?>

