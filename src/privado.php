<?php
require_once 'restringido.php';
require_once 'conectar.php';
$sql = "SELECT nombre, dorsal, goles, amarillas, lesionado FROM plantilla LIMIT 5";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "templates/head.php" ?>

</head>

<body>
<!-- Navigation -->
<?php include "templates/nav.php" ?>

<!-- Page Content -->
<div class="container">
    <h2><a href="listadoBBDD.php">Nuevos Jugadores</a></h2>
    <h2><a href="listado2BBDD.php">Plantilla</a></h2>

</div>
<!-- /.container -->

<!--scripts -->
<?php include "templates/scripts.php" ?>

</body>

</html>
