<!DOCTYPE html>
<html lang="en">
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
<section data-section="catalogo">
  <h2>📦 Catálogo - Unidad V</h2>
  <p>En esta sección podrás ver los productos o servicios ofrecidos.</p>

  <div class="vitrina-catalogo">
    <a href="catalogo.php?id=auricular">
      <img src="img/auricular.png" alt="Auricular">
    </a>
    <a href="catalogo.php?id=mouse">
      <img src="img/mouse.png" alt="Mouse">
    </a>
    <a href="catalogo.php?id=teclado">
      <img src="img/teclado.png" alt="Teclado">
    </a>
  </div>

  <ul class="botonera-catalogo">
    <li><a href="catalogo.php?id=auricular">Auricular</a></li>
    <li><a href="catalogo.php?id=mouse">Mouse</a></li>
    <li><a href="catalogo.php?id=teclado">Teclado</a></li>
  </ul>

  <?php
  if (isset($_GET['id'])) {
      $id = $_GET['id'];

      if ($id == "auricular") {
          $producto = "Auricular";
          $precio = "$95.000";
          $caracteristicas = "Formato circumaural inalámbrico/cableado, almohadillas acolchadas y vincha ajustable.";
          $imagen = "img/auricular.png";
      } elseif ($id == "mouse") {
          $producto = "Mouse";
          $precio = "$45.000";
          $caracteristicas = "Sensor óptico de alta precisión, diseño ergonómico simétrico y conexión por cable.";
          $imagen = "img/mouse.png";
      } elseif ($id == "teclado") {
          $producto = "Teclado";
          $precio = "$78.000";
          $caracteristicas = "Formato compacto 60%, retroiluminación RGB, cable extraíble y switches mecánicos.";
          $imagen = "img/teclado.png";
      }

      if (isset($producto)) {
          echo "<div class='detalle-producto'>";
          echo "<p>Producto: " . $producto . "</p>";
          echo "<p>Precio: " . $precio . "</p>";
          echo "<p>Características: " . $caracteristicas . "</p>";
          echo "<p>Imagen: <img src='" . $imagen . "' alt='" . $producto . "'></p>";
          echo "</div>";
      }
  }
  ?>
</section>
 <footer>
    <p>&copy; <?php echo date("Y"); ?> Programación con PHP y MySQL - Elearning Total. Todos los derechos reservados.</p>
  </footer>
</body>
</html>