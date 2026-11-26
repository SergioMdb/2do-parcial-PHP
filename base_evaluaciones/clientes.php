
<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación web con PHP y MySQL</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<header>
    <h1>🐘 Programación web con PHP y MySQL 📊</h1>
    <nav>
  <input type="checkbox" id="menu-toggle" class="menu-toggle">
  <label class="menu-icon" for="menu-toggle">
    <span></span>
    <span></span>
    <span></span>
  </label>
  <ul>
    <li><a href="index.php">📘 Introducción</a></li>
    <li><a href="catalogo.php">📦 Catálogo</a></li>
    <li><a href="noticias.php">📰 Noticias</a></li>
    <li><a href="clientes.php">👥 Clientes</a></li>
    <li><a href="comentarios.php">💬 Comentarios</a></li>
  </ul>
</nav>

</header>
<section data-section="clientes">
  <h2>👥 Clientes</h2>
  <p>Ingresá como cliente y accedé a contenido exclusivo.</p>

  <?php
  // Verificar si la sesión 'clientes' está iniciada
  if (isset($_SESSION['clientes'])) {
      // Si la sesión existe, se incluye el contenido exclusivo para clientes
      include 'contenido_cliente.php';
  } else {
      // Si no existe la sesión, se muestra el formulario de inicio de sesión
  ?>
      <form action="validar_cliente.php" method="POST">
          <div>
              <label for="email">Correo electrónico:</label>
              <input type="email" id="email" name="email" required>
          </div>
          <div>
              <label for="password">Contraseña:</label>
              <input type="password" id="password" name="password" required>
          </div>
          <button type="submit">Ingresar</button>
      </form>
  <?php
  }
  ?>
</section>
 <footer>
    <p>&copy; <?php echo date("Y"); ?> Programación con PHP y MySQL - Elearning Total. Todos los derechos reservados.</p>
  </footer>
</body>
</html>
```

### 🛠️ Cambios implementados según el documento:
1. **Inicio de Sesión (`session_start()`):** Se agregó al inicio del archivo PHP antes del HTML para posibilitar la lectura de variables de sesión.
2. **Evaluación de Sesión Activa (`$_SESSION['clientes']`):** Se verifica si la variable de sesión está definida. De ser así, se incluye automáticamente el archivo `contenido_cliente.php` mediante `include`.
3. **Formulario de Login:** Si la sesión no está activa, se muestra el formulario con los campos de **Correo electrónico** y **Contraseña**, configurado con `action="validar_cliente.php"` y `method="POST"` para enviar los datos de forma segura.

---

💡 **¿Quieres que escribamos ahora el código correspondiente para `validar_cliente.php` o `contenido_cliente.php`?**



