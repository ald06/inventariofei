jQuery.ajaxSetup({async:false});
$("#idEstadoOrigen").change(function(event){
	$.get("../municipios/"+event.target.value+"", function(response, estado){
		$("#idMunicipioOrigen").empty();
		$("#idMunicipioOrigen").append("<option value=''>Seleccione un municipio</option>");
		for(i=0; i<response.length; i++){
			$("#idMunicipioOrigen").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
});

$("#idEstado").change(function(event){
	if(event.target.value!=""){
		$.get("../municipios/"+event.target.value+"", function(response, estado){
			$("#idMunicipio").empty();
			$("#idMunicipio").append("<option value=''>Seleccione un municipio</option>");
			for(i=0; i<response.length; i++){
				$("#idMunicipio").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idMunicipio3").empty();
			$("#idMunicipio3").append("<option value=''>Seleccione un municipio</option>");
			for(i=0; i<response.length; i++){
				$("#idMunicipio3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$('#idEstado3').val($('#idEstado').val()).trigger('change.select2');
	}
});

$("#idMunicipio").change(function(event){
	if(event.target.value!=""){
		$.get("../localidades/"+event.target.value+"", function(response, municipio){
			$("#idLocalidad").empty();
			$("#idLocalidad").append("<option value=''>Seleccione una localidad</option>");
			for(i=0; i<response.length; i++){
				$("#idLocalidad").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idLocalidad3").empty();
			$("#idLocalidad3").append("<option value=''>Seleccione una localidad</option>");
			for(i=0; i<response.length; i++){
				$("#idLocalidad3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$.get("../colonias2/"+event.target.value+"", function(response, municipio){
			$("#idColonia").empty();
			$("#idColonia").append("<option value=''>Seleccione una colonia</option>");
			for(i=0; i<response.length; i++){
				$("#idColonia").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idColonia3").empty();
			$("#idColonia3").append("<option value=''>Seleccione una colonia</option>");
			for(i=0; i<response.length; i++){
				$("#idColonia3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$.get("../codigos/"+event.target.value+"", function(response, municipio){
			$("#cp").empty();
			$("#cp").append("<option value=''>Seleccione un código postal</option>");
			for(i=0; i<response.length; i++){
				$("#cp").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
			}
			$("#cp3").empty();
			$("#cp3").append("<option value=''>Seleccione un código postal</option>");
			for(i=0; i<response.length; i++){
				$("#cp3").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
			}
		});
		$('#idMunicipio3').val($('#idMunicipio').val()).trigger('change.select2');
	}
});

$("#idLocalidad").change(function(event){
	if(event.target.value!=""){
		$('#idLocalidad3').val($('#idLocalidad').val()).trigger('change.select2');
	}
});

// $("#cp").change(function(event){
// 	if(event.target.value!=""){
// 		$.get("../colonias/"+$('#cp option:selected').html()+"", function(response, cp){
// 			$("#idColonia").empty();
// 			$("#idColonia").append("<option value=''>Seleccione una colonia</option>");
// 			for(i=0; i<response.length; i++){
// 				$("#idColonia").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
// 			}
// 			$("#idColonia3").empty();
// 			$("#idColonia3").append("<option value=''>Seleccione una colonia</option>");
// 			for(i=0; i<response.length; i++){
// 				$("#idColonia3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
// 			}
// 		});
// 		$('#cp3').val($('#cp').val()).trigger('change.select2');
// 		$('#idColonia3').val($('#idColonia').val()).trigger('change.select2');
// 	}
// });

$("#idColonia").change(function(event){
	if(event.target.value!=""){
		$.get("../codigos2/"+event.target.value+"", function(response, colonia){
			$("#cp").empty();
			$("#cp").append("<option value='"+response[0].id+"'> "+response[0].codigoPostal+"</option>");
			$("#cp3").empty();
			$("#cp3").append("<option value='"+response[0].id+"'> "+response[0].codigoPostal+"</option>");
		});
		$('#idColonia3').val($('#idColonia').val()).trigger('change.select2');
	}
});

$("#calle").keyup(function() {
	$('#calle3').val($('#calle').val().toUpperCase());
});
$("#numExterno").keyup(function() {
	$('#numExterno3').val($('#numExterno').val().toUpperCase());
});
$("#numInterno").keyup(function() {
	$('#numInterno3').val($('#numInterno').val().toUpperCase());
});


$("#idEstado2").change(function(event){
	if(event.target.value!=""){
		$.get("../municipios/"+event.target.value+"", function(response, estado){
			$("#idMunicipio2").empty();
			$("#idMunicipio2").append("<option value=''>Seleccione un municipio</option>");
			for(i=0; i<response.length; i++){
				$("#idMunicipio2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
	}
});

$("#idMunicipio2").change(function(event){
	if(event.target.value!=""){
		$.get("../localidades/"+event.target.value+"", function(response, municipio){
			$("#idLocalidad2").empty();
			$("#idLocalidad2").append("<option value=''>Seleccione una localidad</option>");
			for(i=0; i<response.length; i++){
				$("#idLocalidad2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$.get("../colonias2/"+event.target.value+"", function(response, municipio){
			$("#idColonia2").empty();
			$("#idColonia2").append("<option value=''>Seleccione una colonia</option>");
			for(i=0; i<response.length; i++){
				$("#idColonia2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$.get("../codigos/"+event.target.value+"", function(response, municipio){
			$("#cp2").empty();
			$("#cp2").append("<option value=''>Seleccione un código postal</option>");
			for(i=0; i<response.length; i++){
				$("#cp2").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
			}
		});
	}
});

// $("#cp2").change(function(event){
// 	if(event.target.value!=""){
// 		$.get("../colonias/"+$('#cp2 option:selected').html()+"", function(response, cp){
// 			$("#idColonia2").empty();
// 			$("#idColonia2").append("<option value=''>Seleccione una colonia</option>");
// 			for(i=0; i<response.length; i++){
// 				$("#idColonia2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
// 			}
// 		});
// 	}
// });

$("#idColonia2").change(function(event){
	if(event.target.value!=""){
		$.get("../codigos2/"+event.target.value+"", function(response, colonia){
			$("#cp2").empty();
			$("#cp2").append("<option value='"+response[0].id+"'> "+response[0].codigoPostal+"</option>");
		});
	}
});

$("#idEstado3").change(function(event){
	if(event.target.value!=""){
		$.get("../municipios/"+event.target.value+"", function(response, estado){
			$("#idMunicipio3").empty();
			$("#idMunicipio3").append("<option value=''>Seleccione un municipio</option>");
			for(i=0; i<response.length; i++){
				$("#idMunicipio3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
	}
});

$("#idMunicipio3").change(function(event){
	if(event.target.value!=""){
		$.get("../localidades/"+event.target.value+"", function(response, municipio){
			$("#idLocalidad3").empty();
			$("#idLocalidad3").append("<option value=''>Seleccione una localidad</option>");
			for(i=0; i<response.length; i++){
				$("#idLocalidad3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$.get("../colonias2/"+event.target.value+"", function(response, municipio){
			$("#idColonia3").empty();
			$("#idColonia3").append("<option value=''>Seleccione una colonia</option>");
			for(i=0; i<response.length; i++){
				$("#idColonia3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$.get("../codigos/"+event.target.value+"", function(response, municipio){
			$("#cp3").empty();
			$("#cp3").append("<option value=''>Seleccione un código postal</option>");
			for(i=0; i<response.length; i++){
				$("#cp3").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
			}
		});
	}
});

// $("#cp3").change(function(event){
// 	if(event.target.value!=""){
// 		$.get("../colonias/"+$('#cp3 option:selected').html()+"", function(response, cp){
// 			$("#idColonia3").empty();
// 			$("#idColonia3").append("<option value=''>Seleccione una colonia</option>");
// 			for(i=0; i<response.length; i++){
// 				$("#idColonia3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
// 			}
// 		});
// 	}
// });

$("#idColonia3").change(function(event){
	if(event.target.value!=""){
		$.get("../codigos2/"+event.target.value+"", function(response, colonia){
			$("#cp3").empty();
			$("#cp3").append("<option value='"+response[0].id+"'> "+response[0].codigoPostal+"</option>");
		});
	}
});

$("#idClaseVehiculo").change(function(event){
	if(event.target.value!=""){
		$.get("../tipoVehiculos/"+event.target.value+"", function(response, tipo){
			$("#idTipoVehiculo").empty();
			$("#idTipoVehiculo").append("<option value=''>Seleccione un tipo de vehículo</option>");
			for(i=0; i<response.length; i++){
				$("#idTipoVehiculo").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
	}
});

$("#idMarca").change(function(event){
	if(event.target.value!=""){
		$.get("../submarcas/"+event.target.value+"", function(response, marca){
			$("#idSubmarca").empty();
			$("#idSubmarca").append("<option value=''>Seleccione una submarca</option>");
			for(i=0; i<response.length; i++){
				$("#idSubmarca").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
	}
});

$("#idTipoArma").change(function(event){
	if(event.target.value!=""){
		$.get("../armas/"+event.target.value+"", function(response, arma){
			$("#idArma").empty();
			$("#idArma").append("<option value=''>Seleccione un arma</option>");
			for(i=0; i<response.length; i++){
				$("#idArma").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
	}
});
/*
$("#tipo").change(function(event){
	var idCarpeta = $("input[type=hidden][name=idCarpeta]").val();
	if(event.target.value==1){
		$.get("../denunciantes/"+idCarpeta+"", function(response, idCarpeta){
			$("#idInvolucrado").empty();
			$("#idInvolucrado").append("<option value=''>Seleccione un denunciante</option>");
			for(i=0; i<response.length; i++){
				$("#idInvolucrado").append("<option value='"+response[i].id+"'> "+response[i].nombres+"</option>");
			}
		});
	}else{
		if(event.target.value==2){
			$.get("../denunciados/"+idCarpeta+"", function(response, idCarpeta){
				$("#idInvolucrado").empty();
				$("#idInvolucrado").append("<option value=''>Seleccione un denunciado</option>");
				for(i=0; i<response.length; i++){
					$("#idInvolucrado").append("<option value='"+response[i].id+"'> "+response[i].nombres+"</option>");
				}
			});
		}
	}
});
*/
$("#idAbogado").change(function(event){
	if(event.target.value!=""){
		var idCarpeta = $("input[type=hidden][name=idCarpeta]").val();
		$.get("../involucrados/"+idCarpeta+"/"+event.target.value+"", function(response, idCarpeta){
			$("#idInvolucrado").empty();
			$("#idInvolucrado").append("<option value=''>Seleccione un involucrado</option>");
			for(i=0; i<response.length; i++){
				$("#idInvolucrado").append("<option value='"+response[i].id+"'> "+response[i].nombres+" "+response[i].primerAp+" "+response[i].segundoAp+"</option>");
			}
		});
	}
});

$("#idEstadoC").change(function(event){
	if(event.target.value!=""){
		$.get("../municipios/"+event.target.value+"", function(response, estado){
			$("#idMunicipioC").empty();
			$("#idMunicipioC").append("<option value=''>Seleccione un municipio</option>");
			for(i=0; i<response.length; i++){
				$("#idMunicipioC").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
	}
});

$("#idMunicipioC").change(function(event){
	if(event.target.value!=""){
		$.get("../localidades/"+event.target.value+"", function(response, municipio){
			$("#idLocalidadC").empty();
			$("#idLocalidadC").append("<option value=''>Seleccione una localidad</option>");
			for(i=0; i<response.length; i++){
				$("#idLocalidadC").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$.get("../colonias2/"+event.target.value+"", function(response, municipio){
			$("#idColoniaC").empty();
			$("#idColoniaC").append("<option value=''>Seleccione una colonia</option>");
			for(i=0; i<response.length; i++){
				$("#idColoniaC").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$.get("../codigos/"+event.target.value+"", function(response, municipio){
			$("#cpC").empty();
			$("#cpC").append("<option value=''>Seleccione un código postal</option>");
			for(i=0; i<response.length; i++){
				$("#cpC").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
			}
		});
	}
});

// $("#cpC").change(function(event){
// 	if(event.target.value!=""){
// 		$.get("../colonias/"+$('#cpC option:selected').html()+"", function(response, cp){
// 			$("#idColoniaC").empty();
// 			$("#idColoniaC").append("<option value=''>Seleccione una colonia</option>");
// 			for(i=0; i<response.length; i++){
// 				$("#idColoniaC").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
// 			}
// 		});
// 	}
// });

$("#idColoniaC").change(function(event){
	if(event.target.value!=""){
		$.get("../codigos2/"+event.target.value+"", function(response, colonia){
			$("#cpC").empty();
			$("#cpC").append("<option value='"+response[0].id+"'> "+response[0].codigoPostal+"</option>");
		});
	}
});

$("#idDelito").change(function(event){
	if(event.target.value!=""){
		$.get("../agrupaciones1/"+event.target.value+"", function(response, delito){
			$("#idAgrupacion1").empty();
			console.log(response);
			$("#idAgrupacion1").append("<option value=''>Seleccione una desagregación</option>");
			for(i=0; i<response.length; i++){
				$("#idAgrupacion1").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
	});
}
});

$("#idAgrupacion1").change(function(event){
	if(event.target.value!=""){
		$.get("../agrupaciones2/"+event.target.value+"", function(response, agrupacion1){
			$("#idAgrupacion2").empty();
			console.log(response);
			$("#idAgrupacion2").append("<option value=''>Seleccione una desagregación</option>");
			for(i=0; i<response.length; i++){
				$("#idAgrupacion2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
	});
}
});
$('form').sisyphus({
		excludeFields: $( 'input[name=_token]' )
});
