<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "templates/head.php" ?>
</head>
<body>

<!-- Navigation -->
<?php include "templates/nav.php" ?>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Noticias
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Blog Post Row -->
    <a name="noticia1"></a>
    <div class="row">
        <div class="col-md-6 noticia">
            <h3>
                Comienzo play-off
            </h3>
            <h5><em>29/3/2017</em></h5>
            <p>Empieza lo que todos estábamos esperando:<b>Los play-off.</b>. Veremos que papel juega el equipo en esta
                segunda fase de la temporada donde todas las fuerzas...</p>
        </div>

    </div>
    <!-- /.row -->

    <hr>
    <a name="noticia2"></a>
    <div class="row">
        <div class="col-md-6 noticia">
            <h3>
                Últimos fichajes
            </h3>
            <h5><em>5/4/2017</em></h5>
            <p>Recientemente hemos incorporado al equipo a David y a Jose. David juega de central ó por la banda.
                Destaca por su contundencia y buena salida de balón. Jose,...</p>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Blog Post Row -->
    <a name="noticia3"></a>
    <div class="row">
        <div class="col-md-6 noticia">
            <h3>
                Últimos Partidos
            </h3>
            <h5><em>9/4/2017</em></h5>
            <p>El pasado viernes sufrimos una dura derrota contra SOLUTIO por 2-4. El partido había empezado bien para
                nosotros con gol de Javi a los pocos minutos, pero nos remontaron...</p>
        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Pager -->
    <div class="row">
        <ul class="pager">
            <li class="previous disabled"><span>&larr; Nuevas</span>
            </li>
            <li class="next disabled"><span>Antiguas &rarr;</span>
            </li>
        </ul>
    </div>
    <!-- /.row -->
    <hr>

    <!-- Footer -->
    <footer>
        <?php include "templates/footer.php" ?>
    </footer>

</div>
<!-- /.container -->

<!--scripts -->
<?php include "templates/scripts.php" ?>

</body>

</html>
