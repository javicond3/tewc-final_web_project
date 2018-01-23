<?php
require_once 'restringido.php';
require_once 'conectar.php';
$sql = "SELECT nombre, email, posicion, descripcion FROM peticiones LIMIT 100";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "templates/head.php" ?>

</head>

<body>

<!-- Navigation -->
<?php include "templates/nav.php" ?>
<h2>Nuevos jugadores</h2>
<table class="table">
    <thead class="table-head">
    <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Posición</th>
        <th>Descripción</th>
    </tr>
    </thead>
    <tbody class="table-body">

    <?php
    foreach ($db->query($sql) as $fila)
        echo "<tr> <td>" . $fila['nombre'] . "</td> <td>" . $fila['email'] . "</td> 
        <td>" . $fila['posicion'] . "</td> <td>" . $fila['descripcion'] . "</td></tr>"
    ?>

    </tbody>
</table>
</body>
</html>

