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
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Nuevo Jugador</h2>
        </div>
        <div class="col-md-6">
            <form action="formularioRespuesta.php" method="post" data-toggle="validator" role="form">
                <div class="form-group has-feedback">
                    <label for="inputName"></label>
                    <input type="text" name="nombre" class="form-control" id="inputName"
                           placeholder="Introduce tú nombre*" required>
                </div>

                <div class="form-group has-feedback">
                    <label for="inputEmail"></label>
                    <input type="email" name="email" class="form-control" id="inputEmail"
                           placeholder="Introduce tú email*" data-error="Correo inválido" required>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="inputPosicion has-feedback"></label>
                    <select class="form-control" name="posicion" id="inputPosicion" required
                            data-error="Debe seleccionar una posición"
                            data-remote="validatePosicion.php">
                        <option value="Elegir">Elige Posición</option>
                        <option value="Portero">Portero</option>
                        <option value="Defensa">Defensa</option>
                        <option value="Medio">Medio</option>
                        <option value="Delantero">Delantero</option>
                    </select>
                    <div class="help-block with-errors"></div>

                </div>

                <div class="form-group has-feedback">
                    <label for="inputInfo"></label>
                    <textarea class="form-control" name="info" id="inputInfo" rows="4"
                              placeholder="Trayectoria deportiva*" required></textarea>
                </div>
                <input type="submit" class="btn btn-formulario"></input>
            </form>
        </div>

        <div class="col-md-6">
            <h3>Requisitos:</h3>
            <ul>
                <li>Horario: Lunes, Martes y Miércoles [21:00-23:00]</li>
                <li>Experiencia en anteriores equipos</li>
                <li>Serás evaluado en un entrenamiento para ver si eres lo que buscamos</li>
                <li>Plazas limitadas a 20 jugadores por temporada</li>
                <li>Puedes incorporate en cualquier momento de la temporada, no hace falta esperar hasta el año
                    siguiente
                </li>
                <li>Precio de inscripción: 50-150&euro;</li>
            </ul>
        </div>

    </div>
    <!-- end row-->

    <hr>

    <!-- Footer -->
    <footer>
        <?php include "templates/footer.php" ?>
    </footer>

</div>
<!-- /.container -->

<!--scripts -->
<?php include "templates/scripts.php" ?>

<!-- Bootstrap validator -->
<script src="js/validator.js"></script>


</body>

</html>
