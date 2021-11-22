$(document).ready(function(){	
	
	$.busqueda = function(){
		$.ajax({
			method: "POST",
			url: "../backEnd/index.php",
			data: {
				accion: "buscar",
				tabla: $("#seleccion option:selected").val(),
				dni: $("#dni").val(),
				nombre: $("#nombre").val(),
				localidad: $("#localidad").val(),
				telefono: $("#telefono").val()
				
			},
			dataType: "json"
		})
		.done(function(response){
			console.log(response);
			$("#cuerpoTabla").html("");
			for (var i = response.length - 1; i >= 0; i--) {
				$("#cuerpoTabla").append(
					"<tr>"+
						"<td>"+response[i]['dni']+"</td>"+
						"<td>"+response[i]['nombre']+"</td>"+
						"<td>"+response[i]['localidad']+"</td>"+
						"<td>"+response[i]['telefono']+"</td>"+	
					"</tr>"
				)
			}
		})
		.fail(function(){
			alert("No se han encontrado resultados");
		});
	}
	$("#buscar").click(function(){
		$.busqueda();
	});

});