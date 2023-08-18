$(document).ready(() => {
    cargarTablaFacturas();
});

var cargarTablaFacturas = () => {
    $.post("../../controllers/factura.controller.php?op=todos", {}, (listafacturas) => {
        listafacturas = JSON.parse(listafacturas);
        generarTablaFacturas(listafacturas);
        calcularSumaMontos(listafacturas);
    });
};

var filtrarPorFecha = () => {
    var fechaDesde = $("#fechaDesdeInput").val();
    var fechaHasta = $("#fechaHastaInput").val();

    $.post(
        "../../controllers/factura.controller.php?op=filtrarPorFecha",
        { fechaDesde: fechaDesde, fechaHasta: fechaHasta },
        (listafacturas) => {
            listafacturas = JSON.parse(listafacturas);
            generarTablaFacturas(listafacturas);
            calcularSumaMontos(listafacturas);
        }
    );
};

/*var ImprimirJavascript = (e)=>{
    e.preventDefault();
    
  var contenidoImprimir = document.getElementById('imprimir').innerHTML;

    var contenidoOriginal = document.body.innerHTML;
  var ventanaabierta = window.open('','_blank');
  
   // document.body.innerHTML = contenidoImprimir;
   // window.print()
    document.body.innerHTML = contenidoOriginal;
   
   
}*/




var generarTablaFacturas = (listafacturas) => {
    var html = "";
    listafacturas.forEach((factura, index) => {
        html +=
            `<tr>` +
            `<td>${index + 1}</td>` +
            `<td>${factura.cli_cedula} ${factura.cli_nombre} ${factura.cli_apellido}</td>` +
            `<td>${factura.fa_fecha}</td>` +
            `<td>${factura.tipo_menbresia}</td>` +
            `<td>${factura.tipo_costo}</td>` +
            `</tr>`;
    });

    // Agregar validación para mostrar un mensaje si no hay facturas
    if (listafacturas.length === 0) {
        html = `<tr><td colspan="5">No hay facturas disponibles</td></tr>`;
    }

    $("#TablaFactura").html(html);
};

var calcularSumaMontos = (listafacturas) => {
    var sumaMontos = 0;
    listafacturas.forEach((factura) => {
        // Reemplaza factura.tipo_costo por la propiedad correcta que contenga los montos
        sumaMontos += parseFloat(factura.tipo_costo);
    });
    console.log("Suma de montos:", sumaMontos);
    document.getElementById("sumaMontosInput").value = sumaMontos;
};

var generarPDF = (sumaMontos, fechaDesde, fechaHasta) => {
    // Enviar solicitud al script PHP para generar el PDF utilizando Ajax
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "Imprimir.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Aquí podrías mostrar una notificación o redireccionar, dependiendo de tu necesidad
        }
    };
    
    // Enviamos los datos de sumaMontos, fechaDesde y fechaHasta al script PHP
    var data = "sumaMontos=" + encodeURIComponent(sumaMontos) +
               "&fechaDesde=" + encodeURIComponent(fechaDesde) +
               "&fechaHasta=" + encodeURIComponent(fechaHasta);
    xhr.send(data);
};



  
 