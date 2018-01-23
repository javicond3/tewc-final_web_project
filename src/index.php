<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "templates/head.php" ?>

</head>

<body>
<!-- Navigation -->

<?php include "templates/nav.php" ?>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('img/escudo.jpeg');"></div>
            <div class="carousel-caption">
                <h2></h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('img/campo1.jpeg');"></div>
            <div class="carousel-caption">
                <h2>Temporada 16/17</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('img/equipo.jpeg');"></div>
            <div class="carousel-caption">
                <h2></h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div class="container">

    <!--Ultimas noticias -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Últimas noticias
            </h1>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><span class="glyphicon glyphicon-calendar"></span> Comienzo play-off
                        <small>29/3/2017</small>
                    </h4>
                </div>
                <div class="panel-body">
                    <p>Empieza lo que todos estábamos esperando:<b>Los play-off.</b>. Veremos que papel juega el equipo
                        en esta segunda fase de la temporada donde todas las fuerzas...</p>
                    <a href="noticias1.php#noticia1" class="btn btn-default">Leer Más</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><span class="glyphicon glyphicon-calendar"></span> Últimos fichajes
                        <small>5/4/2017</small>
                    </h4>
                </div>
                <div class="panel-body">
                    <p>Recientemente hemos incorporado al equipo a David y a Jose. David juega de central ó por la
                        banda. Destaca por su contundencia y buena salida de balón. Jose,...</p>
                    <a href="noticias1.php#noticia2" class="btn btn-default">Leer más</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><span class="glyphicon glyphicon-calendar"></span>Últimos partidos
                        <small>9/4/2017</small>
                    </h4>
                </div>
                <div class="panel-body">El pasado viernes sufrimos una dura derrota contra SOLUTIO por 2-4. El partido
                    había empezado bien para nosotros con gol de Javi a los pocos minutos, pero nos remontaron...
                    <p></p>
                    <a href="noticias1.php#noticia3" class="btn btn-default">Leer más</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Menú fotos -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Enlaces de interés</h2>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="plantilla.php">
                <img class="img-responsive img-portfolio img-hover" src="img/enlacePlantilla.jpeg" alt="">
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="resultados1.php">
                <img class="img-responsive img-portfolio img-hover" src="img/enlaceResultados.jpeg" alt="">
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="clasificacion1.php">
                <img class="img-responsive img-portfolio img-hover" src="img/enlaceClasificacion.jpeg" alt="">
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="fotos1.php">
                <img class="img-responsive img-portfolio img-hover" src="img/enlaceFotos.jpeg" alt="">
            </a>
        </div>

    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Contacto</h2>
        </div>
        <div class="col-md-6">
            <ul>
                <li>Entrenador: <span class="txt2"> Felipe Otero</span></li>
                <li>Capitán: <span class="txt2"> Álvaro González</span></li>
                <li>Año Creación: <span class="txt2"> 2015</span></li>
                <li>Teléfono:<span class="txt2"> 653159518</span></li>
                <li>E-mail:<span class="txt2"> alvaro_119@hotmail.com </span></li>
            </ul>
            <p>Los partidos se juegan todas las semanan en el polideportivo de Torrespaña los días Miércoles, Jueves ó
                Viernes a última hora de la tarde. El campo está en el polideportivo Torrespaña (calle <em>Saínz de
                    Baranda,94 </em>), al lado del Pirulí y la sede de informativos de RTVE.</p>

        </div>
        <div class="col-md-6">
            <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.4572880386986!2d-3.6625053850491613!3d40.42087207936468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422f530d23215b%3A0x20aee7d9e5b94150!2sInformativos+RTVE!5e0!3m2!1ses!2ses!4v1491689478376;output=embed"></iframe>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="cuadro">
        <div class="row">
            <div class="col-md-8">
                <h4>¿Quieres convertirte en nuevo jugador del Madrid Galaxy? Rellena el siguiente formulario:</h4>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-default btn-block" href="formulario.php">Formulario</a>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <?php include "templates/footer.php" ?>
    </footer>

</div>
<!-- /.container -->
<!--scripts -->
<?php include "templates/scripts.php" ?>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 4000 //changes the speed
    })
</script>

</body>

</html>
