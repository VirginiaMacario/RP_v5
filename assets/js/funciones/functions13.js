$(function(){

	// Lista de docente
	$.post( '../../vista/funciones/bimestre.php' ).done( function(respuesta)
	{
		$( '#bimes' ).html( respuesta );
	});
	
	
	// Lista de Ciudades
	$( '#bimes' ).change( function()
	{
		var el_continente = $(this).val();

	});


	
	
	

})
