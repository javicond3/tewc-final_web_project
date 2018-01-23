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

    <!-- Page Heading-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Álbum de fotos

            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Ficha jugadores -->
    <div class="row">

        <div class="col-sm-6 col-md-4  img-portfolio thumb zoomTarget">
            <img class="img-responsive " src="img/foto1.jpeg">
        </div>

        <div class="col-sm-6 col-md-4  img-portfolio thumb zoomTarget">
            <img class="img-responsive " src="img/foto2.jpeg">
        </div>

        <div class="col-sm-6 col-md-4  img-portfolio thumb zoomTarget">
            <img class="img-responsive " src="img/foto3.jpeg">
        </div>


        <div class="col-sm-6 col-md-4  img-portfolio thumb zoomTarget">
            <img class="img-responsive " src="img/foto4.jpeg">
        </div>

        <div class="col-sm-6 col-md-4  img-portfolio thumb zoomTarget">
            <img class="img-responsive " src="img/foto5.jpeg">
        </div>

        <div class="col-sm-6 col-md-4  img-portfolio thumb zoomTarget">
            <img class="img-responsive " src="img/foto6.jpeg">
        </div>

        <div class="col-sm-6 col-md-4  img-portfolio thumb zoomTarget">
            <img class="img-responsive " src="img/foto7.jpeg">
        </div>

        <div class="col-sm-6 col-md-4  img-portfolio thumb zoomTarget">
            <img class="img-responsive " src="img/foto8.jpeg">
        </div>

        <div class="col-sm-6 col-md-4  img-portfolio thumb zoomTarget">
            <img class="img-responsive " src="img/foto9.jpeg">
        </div>

        <div class="col-sm-6 col-md-4  img-portfolio zoomTarget">
            <img class="img-responsive " src="img/foto10.jpeg">
        </div>

        <div class="col-sm-6 col-md-4  img-portfolio zoomTarget">
            <img class="img-responsive " src="img/foto11.jpeg">
        </div>

        <div class="col-sm-6 col-md-4  img-portfolio zoomTarget">
            <img class="img-responsive " src="img/foto12.jpeg">
        </div>

    </div>

    <hr>

    <!-- Pagination -->
    <?php include "templates/pagination.php" ?>


    <hr>

    <!-- Footer -->
    <footer>
        <?php include "templates/footer.php" ?>
    </footer>

</div>
<!-- /.container -->

<!--scripts -->
<?php include "templates/scripts.php" ?>
<?php include "templates/scriptPagination.php" ?>
<script src="js/jquery.zoomooz.min.js"></script>
</body>

</html>
