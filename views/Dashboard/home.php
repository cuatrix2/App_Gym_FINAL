<!DOCTYPE html>
<html lang="es">
<title> Home</title>

<head>
    <?php require_once('../html/head.php')  ?>
</head>

<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <?php require_once('../html/menu.php') ?>
        <!-- End of Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <?php include_once('../html/header.php')  ?>

            <!-- Page Heading -->
            <div class="container-fluid p-0">
                <div id="blog-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="w-100" src="../../public/imgs/carousel-1.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <h3 class="text-primary text-capitalize m-0">ENNER GYM</h3>
                                <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Mejor Gym</h2>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="w-100" src="../../public/imgs/carousel-2.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <h3 class="text-primary text-capitalize m-0">ENNER GYM</h3>
                                <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Lucha por tus Sueños</h2>

                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
            <!-- Footer -->
            <?php include_once('../html/footer.php') ?>
            <!-- End of Footer -->
        </div>
    </div>
    <a class="scroll-to-top rounded" href="../Dashboard/home.php">
        <i class="fas fa-angle-up"></i>
    </a>
    <!--scripts-->
    <?php include_once('../html/scripts.php')  ?>
</body>

</html>