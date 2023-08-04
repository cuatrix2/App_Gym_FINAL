<?php
include_once('../../config/sesiones.php');
if (isset($_SESSION["em_id"])) {
    $_SESSION["ruta"] = "Cliente";
   
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
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-4">

                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Lista de Clientes</h6>
                                        <button onclick="" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalCliente"> Nuevo Cliente</button>
                                    </div>
                                    <div class="card-body">

                                        <table class="table table-bordered table-striped table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Cedula</th>
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Fecha nacimiento</th>
                                                    <th>Genero</th>
                                                    <th>Altura</th>
                                                    <th>Peso</th>
                                                    <th>Telefono</th>
                                                    <th>Direccion</th>                                     
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id='TablaCliente'></tbody>
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



        <div class="modal fade" data-backdrop="static" data-keyboard="false" id="modalCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tituloModalCliente">Nuevo Cliente</h5>
                        <button type="button" onclick="limpiar()" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <form id="Clientes_form">
                                <div class="modal-body">
                                    <input type="hidden" name="cliente_id" id="cliente_id">

                                    <div class="form-group">
                                        <label for="cli_cedula" class="control-label">Cedula</label>
                                        <input type="text" name="cli_cedula" id="cli_cedula" class="form-control" required>
                                        <small id="cedulaError" class="text-danger"></small>
                                    </div>

                                    <div class="form-group">
                                    <label for="cli_nombre" class="control-label">Nombres</label>
                                    <input type="text" name="cli_nombre" id="cli_nombre" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                    <label for="cli_apellido" class="control-label">Apellidos</label>
                                        <input type="text" name="cli_apellido" id="cli_apellido" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                    <label for="cli_fecha_nacimiento" class="control-label">Fecha nacimiento</label>
                                        <input type="date" name="cli_fecha_nacimiento" id="cli_fecha_nacimiento" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                    <label for="cli_genero" class="control-label">Género</label>
                                    <select name="cli_genero" id="cli_genero" class="form-control" required>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                    </div>


                                    <div class="form-group">
                                    <label for="cli_altura" class="control-label">Altura</label>
                                        <input type="text" name="cli_altura" id="cli_altura" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label for="cli_peso" class="control-label">Peso</label>
                                        <input type="text" name="cli_peso" id="cli_peso" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                    <label for="cli_telefono" class="control-label">Telefono</label>
                                        <input type="text" name="cli_telefono" id="cli_telefono" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                    <label for="cli_direccion" class="control-label">Direccion</label>
                                        <input type="text" name="cli_direccion" id="cli_direccion" class="form-control" required>
                                    </div>                           
                                    <input type="hidden" name="id_empleado" id="id_empleado" value="">
                                </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="btnGuardar" disabled>Guardar</button>
                            <button type="button" class="btn btn-secondary" onclick="limpiar()" data-dismiss="modal">Cerrar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!--scripts-->
        <?php include_once('../html/scripts.php')  ?>
        <script src="./cliente.js"></script>
        <script>
    // Obtén el valor de $_SESSION['em_id'] y asígnalo a la variable idEmpleado
    var idEmpleado = "<?php echo isset($_SESSION['em_id']) ? $_SESSION['em_id'] : ''; ?>";

    // Asigna el valor de idEmpleado al input oculto
    document.getElementById('id_empleado').value = idEmpleado;
</script>
<script>
        var cedulaInput = document.getElementById("cli_cedula");
        var cedulaError = document.getElementById("cedulaError");
        var btnGuardar = document.getElementById("btnGuardar");

        cedulaInput.addEventListener("blur", validarCedula);

        function validarCedula() {
            var cedula = cedulaInput.value;

            if (esCedulaValida(cedula) && esCedulaProvinciaEcuador(cedula) && validarAlgoritmoCedula(cedula)) {
                cedulaError.textContent = "";
                btnGuardar.disabled = false;
            } else {
                cedulaError.textContent = "La cédula no es válida";
                btnGuardar.disabled = true;
            }
        }

        function esCedulaValida(cedula) {
            // Validación básica de longitud y formato numérico
            if (cedula.length !== 10 || !/^\d{10}$/.test(cedula)) {
                return false;
            }
            return true;
        }

        function esCedulaProvinciaEcuador(cedula) {
            // Obtener el código de provincia
            var provincia = parseInt(cedula.substr(0, 2));

            // Verificar si la provincia está en el rango de provincias de Ecuador
            if (provincia >= 1 && provincia <= 24) {
                return true;
            } else {
                return false;
            }
        }

        function validarAlgoritmoCedula(cedula) {
            var total = 0;
            var coeficientes = [2, 1, 2, 1, 2, 1, 2, 1, 2];
            var digitoVerificador = parseInt(cedula.substring(9, 10));

            for (var i = 0; i < 9; i++) {
                var digito = parseInt(cedula.substring(i, i + 1));
                var resultado = digito * coeficientes[i];
                if (resultado > 9) {
                    resultado -= 9;
                }
                total += resultado;
            }

            var residuo = total % 10;
            var resultadoFinal = residuo === 0 ? 0 : 10 - residuo;

            return resultadoFinal === digitoVerificador;
        }
    </script>
    </body>

    </html>

<?php
} else {
    header("Location:../../index.php");
}
?>