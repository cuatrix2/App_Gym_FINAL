//TODO: Archivo de javascript para agregar la funcionalidad 


$().ready(() => {
  tablamembresia();
});
var tablamembresia = () => {
  var html = "";
  $.post(
    "../../controllers/membresia.controller.php?op=todos1", {}, (listamembresia) => {
      listamembresia = JSON.parse(listamembresia);
      $.each(listamembresia, (index, membresia) => {
        html +=
        `<tr>` +
        `<td>${index + 1}</td>` +
        `<td>${membresia.cli_cedula}</td>` +
        `<td>${membresia.tipo_menbresia}</td>` +
        `<td>${membresia.men_fecha_inicio}</td>` +
        `<td>${membresia.men_fecha_fin}</td>` +
        `<td>${membresia.men_estado}</td>` +
        `<td>` +
        `<button class='btn btn-danger' onclick='eliminar(${membresia.men_id})'>Eliminar</button>` +
        `</td>` +
        `</tr>`;
      });
      $("#TablaMembresia").html(html);
    }
  );
};


var eliminar = (men_id) => {
  Swal.fire({
    title: 'Membresia',
    text: "Esta seguro que desea eliminar...???",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    confirmButtonText: 'Eliminar!!!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.post('../../controllers/membresia.controller.php?op=eliminar', {
        men_id: men_id
      }, (res) => {
        res = JSON.parse(res);
        if (res === 'ok') {
          Swal.fire('Membresia', 'Se eliminó con éxito', 'success');
          limpiar();
          tablamembresia();
        }
      })
    }
  })
};

init();
