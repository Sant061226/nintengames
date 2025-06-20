$(document).ready(function () {
	mostrarJuegos();

});
function mostrarJuegos() {
	$.post("Modelo/MostrarJuegos.php", {}, function (respuesta) {
		$("#resultadoJuegos").html(respuesta);
	})
}

