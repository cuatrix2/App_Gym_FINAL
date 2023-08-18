<?php
define('FPDF_FONTPATH', '../../public/vendor/fpdf/font');
require('../../public/vendor/fpdf/fpdf.php');
require_once('../../config/config.php');

error_reporting(0);

$con = new ClaseConexion();
$con = $con->ProcedimientoConectar();
$cadena = "SELECT * FROM facturas INNER JOIN cliente ON facturas.cli_id = cliente.cliente_id INNER JOIN tipo_menbresia ON facturas.men_id = tipo_menbresia.tipo_id INNER JOIN empleado ON facturas.id_empleado = empleado.em_id  ORDER BY cliente.cli_nombre";
$datos = mysqli_query($con, $cadena);

if (isset($_POST['sumaMontos']) && isset($_POST['fechaDesdeInput']) && isset($_POST['fechaHastaInput'])) {
  $sumaMontos = $_POST['sumaMontos'];
  $fechaDesde = $_POST['fechaDesdeInput'];
  $fechaHasta = $_POST['fechaHastaInput'];
}

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

$titulo = "Lista de Montos";
$pdf->Cell(0, 10, "Fecha Desde: " . $fechaDesde, 0, 1, 'C');
$pdf->Cell(0, 10, "Fecha Hasta: " . $fechaHasta, 0, 1, 'C');
$pdf->Cell(0, 10, $titulo, 0, 1, 'C'); // Centrar el título en la página
$pdf->Ln(10); // Agregar espacio entre título y tabla

// Agregar una imagen
$pdf->Image('https://i.pinimg.com/564x/f0/ee/cf/f0eecff8f557c63bca90b7b738c3df73.jpg', 10, 15, 15, 0, 'JPG'); // Cambia la ruta y ajusta las coordenadas y el tamaño según necesites


// Encabezados de la tabla
      // Ajustar coordenadas de celdas para mover la tabla a la derecha
      $pdf->SetX(25); // Ajusta esta coordenada para mover la tabla a la derecha
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(60, 10, 'Datos de Cliente', 1);
$pdf->Cell(30, 10, 'Fecha', 1);
$pdf->Cell(40, 10, 'Membresia', 1);
$pdf->Cell(30, 10, 'Monto', 1);
$pdf->Ln(); // Nueva línea después de los encabezados

// Datos de la tabla
$pdf->SetFont('Arial', '', 12);
while ($fila = mysqli_fetch_assoc($datos)) {
    $DatosCompleto = $fila['cli_nombre'] . ' ' . $fila['cli_apellido'].' ' . $fila['cli_cedula'];
      // Ajustar coordenadas de celdas para mover la tabla a la derecha
      $pdf->SetX(25); // Ajusta esta coordenada para mover la tabla a la derecha
    $pdf->Cell(60, 10, $DatosCompleto, 1); // Agregar nombre completo en la misma columna
    $pdf->Cell(30, 10, $fila['fa_fecha'], 1);
    $pdf->Cell(40, 10, $fila['tipo_menbresia'], 1); // Cambia por el nombre de la columna correcta
    $pdf->Cell(30, 10, '$' . $fila['tipo_costo'], 1);
    $pdf->Ln(); // Nueva línea después de cada fila
}

// Agregar texto debajo de la tabla
$pdf->SetFont('Arial', 'I', 12);
$pdf->Cell(0, 10, "Suma de Montos: $" . $sumaMontos, 0, 1, 'C');


$pdf->Output();
