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
<section data-section="introduccion">
  <h2>📘 Introducción a PHP - Unidad IV</h2>
  <p>En esta sección aplicarás los contenidos introductorios a la programación web del lado del servidor.</p>

    <div id="uni4_1">
      <?php
        echo "Primera frase desde PHP.<br>";
        echo "Segunda frase desde PHP.<br>";
        echo "<h3>Tercera frase con encabezado HTML</h3>";
      ?>
    </div>

    <div id="uni4_2">
      <?php
        echo "EVALUACIÓN<br>";
        echo "INTEGRADORA<br>";
        echo "PHP Y MYSQL";
      ?>
    </div>

    <div id="uni4_3">
      <?php
        $numero_entero = 25;
        $cadena_texto = "Hola desde PHP";
        $es_valido = true;

        echo $numero_entero . "<br>";
        echo $cadena_texto . "<br>";
        echo ($es_valido ? "true" : "false") . "<br>";
      ?>
    </div>

    <div id="uni4_4">
      <?php
        $a = 12;
        $b = 6;
        $c = 2;

        echo "Variables: a = $a, b = $b, c = $c<br>";
        echo "Suma: $a + $b + $c = " . ($a + $b + $c) . "<br>";
        echo "Resta: $a - $b - $c = " . ($a - $b - $c) . "<br>";
        echo "Multiplicación: $a * $b * $c = " . ($a * $b * $c) . "<br>";
        echo "División: $a / $b = " . ($a / $b) . "<br>";
      ?>
    </div>
</section>
 <footer>
    <p>&copy; <?php echo date("Y"); ?> Programación con PHP y MySQL - Elearning Total. Todos los derechos reservados.</p>
  </footer>
</body>
</html>