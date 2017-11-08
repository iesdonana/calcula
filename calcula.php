<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculadora</title>
    </head>
    <body>
        <?php
        require 'auxiliar.php';

        define('OPERACIONES', ['+', '-', '*', '/']);

        $op1 = $op2 = $op = null;
        extract($_GET, EXTR_IF_EXISTS);
        ?>
        <?php if (isset($op1, $op2, $op)): ?>
            <?php if (is_numeric($op1) && is_numeric($op2)): ?>
                <?php if ($op1 >= 0 && $op2 >= 0): ?>
                    <?php if (in_array($op, OPERACIONES)): ?>
                        <?php $op1 = eval("return $op1 $op $op2;") ?>
                    <?php else: ?>
                        <h3>Error: Operación no válida.</h3>
                    <?php endif ?>
                <?php else: ?>
                    <h3>Error: Los dos operandos deben ser positivos.</h3>
                <?php endif ?>
            <?php else: ?>
                <h3>Error: Los dos operandos deben ser numéricos.</h3>
            <?php endif ?>
        <?php elseif ($op1 !== null || $op2 !== null || $op !== null): ?>
            <h3>Error: Falta algún parámetro.</h3>
        <?php endif ?>
        <form action="calcula.php" method="get">
            <label for="op1">Primer operando:</label>
            <input id="op1" type="text" name="op1" value="<?= $op1 ?>" /><br/>
            <label for="op2">Segundo operando:</label>
            <input id="op2" type="text" name="op2" value="<?= $op2 ?>" /><br/>
            <label for="op">Operación:</label>
            <?php seleccion(OPERACIONES, $op, 'op') ?><br/>
            <input type="submit" value="Calcular" />
        </form>
    </body>
</html>
