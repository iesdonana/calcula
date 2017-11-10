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
        $error = [];
        try {
            compruebaParametros($op1, $op2, $op, $error);
            compruebaOperador($op, OPERACIONES, $error);
            compruebaOperandos($op1, $op2, $error);
            compruebaErrores($error);
            $op1 = eval("return $op1 $op $op2;");
        } catch (Exception $e) {
            mostrarErrores($error);
        }
        dibujaFormulario($op1, $op2, $op, OPERACIONES);
        ?>
    </body>
</html>
