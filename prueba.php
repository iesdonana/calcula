<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Prueba</title>
    </head>
    <body>
        <?php if (false): ?>
            <strong>Es true</strong>
        <?php else: ?>
            <em>Es false</em>
        <?php endif ?>
        <?php for ($i = 1; $i <= 100; $i++): ?>
            <?= $x ?><br/>
        <?php endfor ?>
    </body>
</html>
