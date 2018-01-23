<?php
$valido = true;
$posicion = $_REQUEST['posicion'];
if (!empty($posicion) && strcmp($posicion, "Elegir") === 0)
    $valido = false;

if ($valido) {
    http_response_code(200);
} else {
    http_response_code(400);
}
?>




