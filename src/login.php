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
            <h2 class="page-header">Iniciar Sesión</h2>
            <h3>Restringido para miembros del club</h3>
        </div>
        <div class="col-md-12">
            <form action="compruebaLogin.php" method="post">
                <label for="username"></label>
                <input type="text" id="username" name="username" class="form-control form_input" placeholder="Usuario"
                       required>
                <label for="password"></label>
                <input type="password" id="password" name="password" class="form-control form_input"
                       placeholder="Contraseña" required>
                <br>
                <button class="btn btn-lg  btn-block btn-default" type="submit">Acceder</button>
                <?php if (isset($_REQUEST['errorLogin'])): ?>
                <div class="panel panel-danger">
                    <div class="panel-heading">Error</div>
                    <div class="panel-body lesionado">
                        <p><?php echo "Nombre o contraseña incorrectos"; ?></p>
                    </div>
                </div>
            </form>
        </div>
        <?php endif; ?>
    </div>
    <!-- end row-->

    <hr>

    <!-- Footer -->
</div>
<!-- /.container -->
<!--scripts -->
<?php include "templates/scripts.php" ?>

</body>

</html>
