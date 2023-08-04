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
                            <div class="gym-class-box d-flex flex-column align-items-center justify-content-center bg-primary text-white py-5 px-5">
                                <i class="flaticon-six-pack"></i>
                                <h3 class="display-4 mb-3 text-white font-weight-bold">MISIÓN</h3>
                                <p>
                                    "Proporcionar un ambiente inspirador y motivador que promueva un estilo de vida saludable y activo, 
                                    ofreciendo instalaciones de calidad, entrenamientos personalizados y programas de acondicionamiento 
                                    físico para personas de todas las edades y niveles de condición física. Nuestra misión es ayudar a nuestros 
                                    miembros a alcanzar sus objetivos de bienestar, fomentando la salud, la felicidad y el bienestar general."
                                </p>     
                                <img class="w-100" src="../../public/imgs/blog-2.jpg" alt="Image">
                            </div>

                            </div>
                            <div class="col-md-6 p-0">
                                <div class="gym-class-box d-flex flex-column align-items-center justify-content-center bg-secondary text-left text-white py-5 px-5">
                                    <i class="flaticon-six-pack"></i>
                                    <h3 class="display-4 mb-3 text-white font-weight-bold">VISIÓN</h3>
                                        <p>
                                        "Nos esforzamos por convertirnos en el gimnasio líder en nuestra comunidad y más allá, reconocidos por nuestra
                                         excelencia en servicios, innovación en programas de acondicionamiento físico y la creación de un ambiente amigable 
                                         y acogedor para nuestros miembros. Nuestra visión es ser el destino preferido para aquellos que buscan mejorar su 
                                         salud y forma física, brindando resultados tangibles y sostenibles a largo plazo para todos nuestros clientes y miembros."
                                        </p>     
                                    <img class="w-100" src="../../public/imgs/about.jpg" alt="Image">
                                  
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Gym Class End -->
                     <!-- Features Start -->
                    <div class="container-fluid my-6">
                        <div class="row">
                        <div class="col-lg-4 p-0">
                            <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                                <i class="flaticon-weightlifting display-3 text-primary mr-3"></i>
                                <div>
                                    <h2 class="text-white mb-3">¿Quiénes Somos?</h2>
                                    <p>
                                        Somos Evolution Gym, un gimnasio para todos. Contamos con las mejores máquinas para ejercicios y ofrecemos membresías a muy buenos precios, ya sea mensuales o anuales.
                                    </p>                                 
                                </div>
                            </div>
                        </div>

                            <div class="col-lg-4 p-0">
                                <div class="d-flex align-items-center bg-primary text-white px-5" style="min-height: 300px;">
                                    <i class="flaticon-weightlifting display-3 text-secondary mr-3"></i>
                                    <div class="">
                                        <h2 class="text-white mb-3">Ubicacion</h2>
                                        <p>Evolution Gym se encuentra en la ciudad de Santo Domingo, Nos encontramos en el centro entre la calle Ibarra y Guayaquil, puedes ir directamente al mapa dando al boton                   ..
                                        </p>
                                        <a href="https://goo.gl/maps/SMgnL4RHiUUmVMhL6" class="btn  btn-outline-light mt-4 px-4">Ubicacion</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 p-0">
                                <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                                    <i class="flaticon-treadmill display-3 text-primary mr-3"></i>
                                    <div class="">
                                        <h2 class="text-white mb-3">Contacto</h2>
                                        <p>
                                            Numero contacto: +593 98 514 3463 
                                        </p>
                                        <p>
                                            Correo contacto: jhonnypmg21@uniandes.edu.ec
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Features End -->
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