<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>El programa que saluda</title>
    </head>
    <body>
        <?php
            $nombre = null;     // Obligatorio
            $apellidos = '';    // Opcional
            extract($_GET, EXTR_IF_EXISTS);
        ?>
        <?php if ($nombre != null): ?>
            <?php $completo = trim("$nombre $apellidos") ?>
            <p>¡Hola, <?= $completo ?>!</p>
        <?php else: ?>
            <h3>Error: falta el parámetro <code>nombre</code></h3>
        <?php endif ?>
    </body>
</html>
