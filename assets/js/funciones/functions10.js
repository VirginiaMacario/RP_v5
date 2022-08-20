$(function(){

	// Lista de docente
	$.post( '../../vista/funciones/alumnos.php' ).done( function(respuesta)
	{
		$( '#estudiante' ).html( respuesta );
	});
	
	
	// Lista de Ciudades
	$( '#estudiante' ).change( function()
	{
		var el_continente = $(this).val();

	});


	
	
	

})
