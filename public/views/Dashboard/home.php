<!DOCTYPE html>
<html lang="es">
<title> Home</title>
<head>
<?php require_once('../html/head.php')  ?>
</head>
<body >
    <div id="wrapper">
        <!-- Sidebar -->
        <?php  require_once('../html/menu.php') ?>
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

                                    <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">EVOLUTION GYM</h2>
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="../../public/imgs/carousel-2.jpg" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">

                                    <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">EL MEJOR </h2>
                                    
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                        <!-- Gym Class Start -->
                    <div class="container gym-class mb-5">
                        <div class="row px-3">
                            <div class="col-md-6 p-0">
                                <div class="gym-class-box d-flex flex-column align-items-end justify-content-center bg-primary text-right text-white py-5 px-5">
                                    <i class="flaticon-six-pack"></i>
                                    <h3 class="display-4 mb-3 text-white font-weight-bold">Quienes Somos?</h3>
                                    <p>
                                        Somos Evolution Gym gimnasio para todos, contamos con las mejores maquinas para 
                                        ejercicios, vendemos membresias a muy buenos precios ya sea de mes o anuales
                                        <p>
                                        ¡Que esperas para registrarte!..
                                        </p>
                                    </p>     
                                    <img class="w-100" src="../../public/imgs/blog-2.jpg" alt="Image">
                                    <a href="../Clientes/cliente.views.php" class="btn btn-lg btn-outline-light mt-4 px-4">Registrar</a> 
                                </div>
                            </div>
                            <div class="col-md-6 p-0">
                                <div class="gym-class-box d-flex flex-column align-items-start justify-content-center bg-secondary text-left text-white py-5 px-5">
                                    <i class="flaticon-bodybuilding"></i>
                                    <h3 class="display-4 mb-3 text-white font-weight-bold">Nos ubicamos</h3>
                                    <p>
                                        Evolution Gym se encuentra en la ciudad de Santo Domingo, Nos encontramos en el centro entre la calle Ibarra y Guayaquil, puedes ir directamente al mapa dando al boton
                                        ..
                                    </p>
                                    <img class="w-100" src="../../public/imgs/ubica.jpeg" alt="Image">
                                    <a href="https://goo.gl/maps/SMgnL4RHiUUmVMhL6" class="btn btn-lg btn-outline-light mt-4 px-4">Ubicacion</a> 
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Gym Class End -->
                    </div>
                </div>
            <!-- Footer -->
            <?php  include_once('../html/footer.php') ?>
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