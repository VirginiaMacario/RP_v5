$(function(){

	// Lista de docente
	$.post( '../../vista/funciones/grado.php' ).done( function(respuesta)
	{
		$( '#gra' ).html( respuesta );
	});
	
	
	// Lista de Ciudades
	$( '#gra' ).change( function()
	{
		var el_continente = $(this).val();

		// Lista de clase
		$.post( '../../vista/funciones/clase3.php', { continente: el_continente} ).done( function( respuesta )
		{
			$( '#cla' ).html( respuesta );
		});
	});


	$( '#cla' ).change( function()
		{
			var la_sclase = $(this).val();
			
			
		$.post( '../../vista/funciones/seccion.php', { paises: la_sclase} ).done( function( respuesta )
		{
			$( '#sec' ).html( respuesta );
		});			


		});
	
	
	
	
	$( '#clase' ).change( function()
		{
			var la_sclase = $(this).val();
			
			
		$.post( '../vista/funciones/tema.php', { paises: la_sclase} ).done( function( respuesta )
		{
			$( '#tema' ).html( respuesta );
		});			


		});
	
	
	
	

})
