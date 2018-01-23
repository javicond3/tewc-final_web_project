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

        <div class="col-sm-6 col-md-4  img-portfolio zoomTarget">
            <img class="img-responsive " src="img/foto13.jpeg">
        </div>

        <div class="col-sm-6 col-md-4  img-portfolio zoomTarget">
            <img class="img-responsive " src="img/foto14.jpeg">
        </div>

        <div class="col-sm-6 col-md-4  img-portfolio zoomTarget">
            <img class="img-responsive " src="img/foto15.jpeg">
        </div>

    </div>

    <hr>

    <!-- Pagination -->
    <?php include "templates/pagination.php" ?>

    <hr>

    <!-- Footer -->
    <footer>
        <?php include "templates/footer.php" ?>
        <script src="js/jquery.zoomooz.min.js"></script>
    </footer>

</div>
<!-- /.container -->

<!--scripts -->
<?php include "templates/scripts.php" ?>
<?php include "templates/scriptPagination.php" ?>
<script src="js/jquery.zoomooz.min.js"></script>

</body>

</html>
