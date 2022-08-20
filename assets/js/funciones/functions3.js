$(function(){

	// Lista de docente
	$.post( '../vista/funciones/periodo.php' ).done( function(respuesta)
	{
		$( '#periodo' ).html( respuesta );
	});
	
	
	// Lista de Ciudades
	$( '#periodo' ).change( function()
	{
		var el_continente = $(this).val();

	});


	
	
	

})
