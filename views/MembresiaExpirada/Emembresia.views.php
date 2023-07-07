<?php
include_once('../../config/sesiones.php');
if (isset($_SESSION["em_id"])) {
    $_SESSION["ruta"] = "Membresias Expiradas";
?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <?php require_once('../html/head.php')  ?>
    </head>

    <body id="page-top">
        <div id="wrapper">
            <!-- Sidebar -->
            <?php require_once('../html/menu.php') ?>
            <!-- End of Sidebar -->
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <!-- Topbar -->
                    <?php include_once('../html/header.php')  ?>
                    <!-- End of Topbar -->

                    <div class="container-fluid">

                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800"><?php echo $_SESSION["ruta"]?></h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-4">

                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Lista de <?php echo $_SESSION["ruta"]?></h6>
                                       <!-- <button onclick="cargaSelectcitipo()" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalMembresia"> Nueva Membresia</button>-->
                                    </div>
                                    <div class="card-body">

                                        <table class="table table-bordered table-striped table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Cedula</th>
                                                    <th>Tipo Membresia</th>
                                                    <th>Fecha inicio</th>
                                                    <th>Fecha fin</th>
                                                    <th>Estado</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id='TablaMembresia'></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <?php include_once('../html/footer.php') ?>
                <!-- End of Footer -->
            </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>



        <div class="modal fade" data-backdrop="static" data-keyboard="false" id="modalMembresia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tituloModalMembresia">Nueva membresia</h5>
                        <!--<button type="button" onclick="limpiar()" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>-->

                    </div>
                    <form id="Membresia_form">
                                <div class="modal-body">
                                    <input type="hidden" name="men_id" id="men_id">

                                        <div class="form-group">
                                            <label for="cliente_id" class="control-label">Cedula</label>
                                            <select name="cliente_id" id="cliente_id" class="form-control">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tipo_id" class="control-label">Tipo Membresia</label>
                                            <select name="tipo_id" id="tipo_id" class="form-control">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="men_fecha_inicio" class="control-label">Fecha Inicio</label>
                                            <input type="datetime-local" name="men_fecha_inicio" id="men_fecha_inicio" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="men_fecha_fin" class="control-label">Fecha Fin</label>
                                            <input type="datetime-local" name="men_fecha_fin" id="men_fecha_fin" class="form-control" required>
                                        </div>  
                                        <div class="form-group">
                                            <label for="men_estado" class="control-label">Estado</label>
                                            <input type="text" name="men_estado" id="men_estado" class="form-control" value="Activo" readonly required>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <button type="button" class="btn btn-secondary" onclick="limpiar()" data-dismiss="modal">Cerrar</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>

        <!--scripts-->
        <?php include_once('../html/scripts.php')  ?>
        <script src="./Emembresia.js"></script>

    </body>

    </html>

<?php
} else {
    header("Location:../../index.php");
}
?>