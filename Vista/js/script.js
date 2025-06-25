$(document).ready(function () {
  mostrarJuegos();
});
function mostrarJuegos() {
  $.post("Modelo/MostrarJuegos.php", {}, function (respuesta) {
    $("#resultadoJuegos").html(respuesta);
  });
}
function actualizarJuegos() {
  var id = $("#id").val();
  var title = $("#title").val();
  var platform = $("#platform").val();
  var category = $("#category").val();
  var cover = $("#cover").val();
  var year = $("#year").val();
  $.post(
    "index.php?accion=editGame",
    {
      id: id,
      title: title,
      platform: platform,
      category: category,
      cover: cover,
      year: year,
    },
    function (documento) {
      $("#mensaje").html(documento);
    }
  );
}
