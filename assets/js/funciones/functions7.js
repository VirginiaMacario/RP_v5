$(function(){

	// Lista de docente
	$.post( '../../vista/funciones/padre.php' ).done( function(respuesta)
	{
		$( '#padre' ).html( respuesta );
	});
	
	
	// Lista de Ciudades
	$( '#padre' ).change( function()
	{
		var el_continente = $(this).val();

	});


	
	
	

})
