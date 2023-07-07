<?php
//TODO: archivos requeridos
require_once('../config/config.php');
//require_once('../models/empleadosroles.model.php');

class clienteModel
{

   public function todos()
    {
        $con = new ClaseConexion();
        $con=$con->ProcedimientoConectar();
        $cadena = "SELECT * FROM `cliente`";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }

    


    public function Insertar($cedula, $Nombres, $Apellidos, $fechanacimiento, $genero, $altura, $peso, $telefono, $direccion,$idempleado) {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT INTO `cliente`(`cli_cedula`, `cli_nombre`, `cli_apellido`, `cli_fecha_nacimiento`, `cli_genero`, `cli_altura`, `cli_peso`, `cli_telefono`, `cli_direccion`, `id_empleado`) VALUES ('$cedula', '$Nombres', '$Apellidos', '$fechanacimiento', '$genero', '$altura', '$peso', '$telefono', '$direccion','$idempleado')";
        if (mysqli_query($con, $cadena)) {
            return 'ok';
        } else {
            return mysqli_error($con);
        }
    }
    
    public function uno($idcliente){
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT *FROM `cliente` where cliente_id = $idcliente";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }

    public function Actualizar($cliente_id, $cedula, $Nombres, $Apellidos, $fechanacimiento, $genero, $altura, $peso, $telefono, $direccion, $idempleado) {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "UPDATE `cliente` SET `cli_cedula`='$cedula', `cli_nombre`='$Nombres', `cli_apellido`='$Apellidos', `cli_fecha_nacimiento`='$fechanacimiento', `cli_genero`='$genero', `cli_altura`='$altura', `cli_peso`='$peso', `cli_telefono`='$telefono', `cli_direccion`='$direccion', `id_empleado`='$idempleado' WHERE cliente_id=$cliente_id";
        if (mysqli_query($con, $cadena)) {
            return 'ok';
        } else {
            return mysqli_error($con);
        }
    }
    
    public function Eliminar($idcliente){
        $con = new ClaseConexion();
        $con=$con->ProcedimientoConectar();
        $cadena = "DELETE FROM `cliente` WHERE cliente_id=$idcliente ";
        if (mysqli_query($con, $cadena)){
            return 'ok';
        }else{
           
            return mysqli_error($con);
        }
    }
}