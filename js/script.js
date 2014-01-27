$(document).ready(function () {

	$("#insertsubmit").click(function()
	{

		var informacion = new Object();

		informacion.cedula = $("#inputCedula").val();
		informacion.nombre = $("#inputNombre").val();
		informacion.apellido = $("#inputApellido").val();

		var datosusuario = JSON.stringify(informacion);
		console.log(datosusuario);

		$.ajax({
			type:"POST",
			url : "post_insert",
			data : {datosusuario : datosusuario},
			
			success: function(respuesta){				
				$("#inputCedula").val(null); 
				$("#inputNombre").val(null);
				$("#inputApellido").val(null);				
			}
				
		});
		return false;		
	});



	$(".btn.btn-default.btn-danger.btn-xs").click(function() 
	{
	    var $row = $(this).closest('tr');


	    var $columns = $row.find('td');
	    
	    var informacion = new Object();
	    
	    $.each($columns, function(i, item) {
	        if(item.getAttribute('data-columna')){
	            informacion[item.getAttribute('data-columna')] = item.innerHTML;
	        }
      	});
		var datosusuario = JSON.stringify(informacion);
    	console.log(datosusuario);

		$.ajax({
			type: "POST",
			url : "post_delete",
			data : {datosusuario : datosusuario},			

				
		});

	    $row.hide();

		return false;	    	
	});

    
});