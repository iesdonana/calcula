<?php

function exception_error_handler($severidad, $mensaje, $fichero, $línea)
{
    if (!(error_reporting() & $severidad)) {
        // Este código de error no está incluido en error_reporting
        return;
    }
    throw new ErrorException($mensaje, 0, $severidad, $fichero, $línea);
}
set_error_handler("exception_error_handler");


try {
    echo 4 / 0;
    //throw new TypeError("Error horroroso.");
    echo "Se ha saltado la excepción.";
} catch (DivisionByZeroError $e) {
    echo "Se ha provocado el siguiente error: " . $e->getMessage() . PHP_EOL;
} catch (TypeError $e) {
    echo "Error aritmético";
}
