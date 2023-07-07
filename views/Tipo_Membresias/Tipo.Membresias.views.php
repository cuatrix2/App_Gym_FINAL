<?php
include_once('../../config/sesiones.php');
if (isset($_SESSION["em_id"])) {
    $_SESSION["ruta"] = "Tipo Membresias";
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
                            <h1 class="h3 mb-0 text-gray-800"><?php echo $_SESSION["ruta"] ?></h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-4">

                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Lista de <?php echo $_SESSION["ruta"] ?></h6>
                                        <button  class="btn btn-primary float-right" data-toggle="modal" data-target="#modalMembresias"> Nueva Membresia</button>
                                    </div>
                                    <div class="card-body">

                                        <table class="table table-bordered table-striped table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tipo Membresia</th>
                                                    <th>Tipo Descripcion</th>
                                                    <th>Tipo Duracion</th>
                                                    <th>Tipo Precio Mensual</th>
                                                    <th>Tipo Costo</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody id='TablaTMembresias'></tbody>
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


  <!-- Ventana Modal -->
      
  <div class="modal fade" data-backdrop="static" data-keyboard="false" id="modalMembresias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tituloModalTmenbresias">Nuevo Empleado</h5>
                        <button type="button" onclick="limpiar()" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <form id="Tmembresias_form">
                                <div class="modal-body">
                                    <input type="hidden" name="tipo_id" id="tipo_id">

                                    <div class="form-group">
                                    <label for="tipo_menbresia" class="control-label">Tipo Membresia</label>
                                    <input type="text" name="tipo_menbresia" id="tipo_menbresia" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="tipo_descripcion" class="control-label">Tipo Descripcion</label>
                                        <input type="text" name="tipo_descripcion" id="tipo_descripcion" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="tipo_duracion" class="control-label">Tipo Duracion</label>
                                        <input type="text" name="tipo_duracion" id="tipo_duracion" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="tipo_precio_mensual" class="control-label">Tipo Precio Mensual</label>
                                        <input type="text" name="tipo_precio_mensual" id="tipo_precio_mensual" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="tipo_costo" class="control-label">Tipo Costo</label>
                                        <input type="mail" name="tipo_costo" id="tipo_costo" class="form-control" required>
                                    </div>
                                    <input type="hidden" name="id_empleado" id="id_empleado" value="">
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
        <script src="./Tipo.Membresias.js"></script>
        <script>
    // Obtén el valor de $_SESSION['em_id'] y asígnalo a la variable idEmpleado
    var idEmpleado = "<?php echo isset($_SESSION['em_id']) ? $_SESSION['em_id'] : ''; ?>";

    // Asigna el valor de idEmpleado al input oculto
    document.getElementById('id_empleado').value = idEmpleado;
</script>
    </body>

    </html>

<?php
} else {
    header("Location:../../index.php");
}
?>