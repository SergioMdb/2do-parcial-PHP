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
<section data-section="comentarios">
  <h2>💬 Comentarios</h2>
  <p>Espacio para que los usuarios dejen sus comentarios o preguntas.</p>

  <!-- Formulario de envío -->
  <form action="cargar_comentario.php" method="POST">
      <div>
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" required>
      </div>
      <div>
          <label for="apellido">Apellido:</label>
          <input type="text" id="apellido" name="apellido" required>
      </div>
      <div>
          <label for="email">Correo electrónico:</label>
          <input type="email" id="email" name="email" required>
      </div>
      <div>
          <label for="comentarios">Comentarios:</label>
          <textarea id="comentarios" name="comentarios" rows="5" required></textarea>
      </div>
      <button type="submit">Enviar comentario</button>
  </form>

  <?php
  // Mensaje de éxito ubicado debajo del formulario
  if (isset($_GET['ok'])) {
      echo '<p style="color: green; font-weight: bold; margin-top: 10px;">¡El comentario se envió con éxito!</p>';
  }
  ?>
</section>

<!-- Sección separada para mostrar los comentarios válidos -->
<section data-section="listado-comentarios">
  <h3>Listado de comentarios</h3>
  <?php
  include 'conexion.php';
  // Se filtran los registros vacíos preexistentes y se muestran los más recientes primero
  $resultado = mysqli_query($conexion, "SELECT nombre, apellido, comentario FROM comentarios WHERE comentario != '' ORDER BY id_comentario DESC");
  while ($fila = mysqli_fetch_assoc($resultado)) {
  ?>
      <div class="comentario-box" style="border-bottom: 1px solid #ddd; margin-bottom: 15px; padding-bottom: 10px;">
          <h4><?php echo $fila['nombre'] . ' ' . $fila['apellido']; ?></h4>
          <p><?php echo $fila['comentario']; ?></p>
      </div>
  <?php
  }
  ?>
</section>

 <footer>
    <p>&copy; <?php echo date("Y"); ?> Programación con PHP y MySQL - Elearning Total. Todos los derechos reservados.</p>
  </footer>
</body>
</html>