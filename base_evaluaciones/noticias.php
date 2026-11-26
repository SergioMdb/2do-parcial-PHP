<?php
$noticias = [
    [
        'titulo' => 'Nuevos procesadores con gráficos integrados de alto rendimiento',
        'texto'  => 'Las últimas arquitecturas híbridas permiten ejecutar títulos competitivos y tareas de edición sin necesidad de una GPU dedicada.',
        'imagen' => 'img/noticia1.png',
        'alt'    => 'Procesador de escritorio sobre placa madre'
    ],
    [
        'titulo' => 'Avances en fibra óptica y conectividad satelital de baja latencia',
        'texto'  => 'Los nuevos despliegues buscan reducir tiempos de respuesta y mejorar la estabilidad en zonas alejadas de los grandes centros urbanos.',
        'imagen' => 'img/noticia2.png',
        'alt'    => 'Infraestructura de telecomunicaciones y redes'
    ],
    [
        'titulo' => 'Buenas prácticas para optimizar consultas SQL en aplicaciones web',
        'texto'  => 'El uso adecuado de índices, consultas preparadas y normalización de tablas ayuda a evitar cuellos de botella a medida que crece la base.',
        'imagen' => 'img/noticia3.png',
        'alt'    => 'Código y esquema de base de datos en pantalla'
    ],
    [
        'titulo' => 'Herramientas de depuración y control de versiones en equipos de desarrollo',
        'texto'  => 'Adoptar flujos ordenados con ramas, pruebas locales y registros claros facilita detectar errores antes de pasar a producción.',
        'imagen' => 'img/noticia4.png',
        'alt'    => 'Entorno de desarrollo y terminal de código'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #e6e3dc;
            color: #222;
            padding: 30px 20px;
        }

        .seccion-noticias {
            max-width: 1000px;
            margin: 0 auto;
        }

        .seccion-titulo {
            text-align: center;
            font-size: 2rem;
            letter-spacing: 3px;
            margin-bottom: 28px;
            color: #555;
            text-transform: uppercase;
        }

        .grilla-noticias {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        .tarjeta-noticia {
            background-color: #f4f2ed;
            border: 1px solid #d5d0c5;
            border-radius: 4px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .tarjeta-noticia img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
            background-color: #ccc;
        }

        .tarjeta-contenido {
            padding: 16px;
        }

        .tarjeta-contenido h2 {
            font-size: 1.15rem;
            margin-bottom: 10px;
            color: #1f2937;
            line-height: 1.3;
        }

        .tarjeta-contenido p {
            font-size: 0.95rem;
            line-height: 1.5;
            color: #4b5563;
        }

        @media (max-width: 700px) {
            .grilla-noticias {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <section class="seccion-noticias">
        <h1 class="seccion-titulo">Noticias</h1>

        <div class="grilla-noticias">
            <?php foreach ($noticias as $noticia): ?>
                <article class="tarjeta-noticia">
                    <img
                        src="<?= htmlspecialchars($noticia['imagen'], ENT_QUOTES, 'UTF-8') ?>"
                        alt="<?= htmlspecialchars($noticia['alt'], ENT_QUOTES, 'UTF-8') ?>"
                    >
                    <div class="tarjeta-contenido">
                        <h2><?= htmlspecialchars($noticia['titulo'], ENT_QUOTES, 'UTF-8') ?></h2>
                        <p><?= htmlspecialchars($noticia['texto'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>