<?php
require_once 'restringido.php';
require_once 'conectar.php';
$sql = "SELECT nombre, dorsal, goles, amarillas, lesionado FROM plantilla LIMIT 100";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "templates/head.php" ?>

</head>

<body>

<!-- Navigation -->
<?php include "templates/nav.php" ?>
<h2>Plantilla</h2>
<table class="table">
    <thead class="table-head">
    <tr>
        <th>Nombre</th>
        <th>Dorsal</th>
        <th>Goles</th>
        <th>Amarillas</th>
        <th>Lesionado</th>
    </tr>
    </thead>
    <tbody class="table-body">

    <?php
    foreach ($db->query($sql) as $fila) {
        if (strcmp($fila['lesionado'], "SI") === 0) {
            echo "<tr class='lesionado'> <td>" . $fila['nombre'] . "</td> <td>" . $fila['dorsal'] . "</td> 
        <td>" . $fila['goles'] . "</td> <td>" . $fila['amarillas'] . "</td> <td>" . $fila['lesionado'] . "</td> 
        </tr>";
        } else {
            echo "<tr> <td>" . $fila['nombre'] . "</td> <td>" . $fila['dorsal'] . "</td> 
        <td>" . $fila['goles'] . "</td> <td>" . $fila['amarillas'] . "</td> <td>" . $fila['lesionado'] . "</td> 
        </tr>";
        }
    }

    ?>

    </tbody>
</table>
</body>
</html>
