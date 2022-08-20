$(function(){

	// Lista de docente
	$.post( '../../vista/funciones/cla.php' ).done( function(respuesta)
	{
		$( '#clas' ).html( respuesta );
	});
	
	
	// Lista de Ciudades
	$( '#clas' ).change( function()
	{
		var el_continente = $(this).val();

	});


	
	
	

})
