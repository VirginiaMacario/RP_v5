$(function(){

	// Lista de docente
	$.post( '../../vista/funciones/libro.php' ).done( function(respuesta)
	{
		$( '#libro' ).html( respuesta );
	});
	
	
	// Lista de Ciudades
	$( '#libro' ).change( function()
	{
		var el_continente = $(this).val();
		
		$.post( '../../vista/funciones/canti.php', { continente: el_continente} ).done( function( respuesta )
		{
			$( '#canti' ).html( respuesta );
		});
	});


	
	
	

})
