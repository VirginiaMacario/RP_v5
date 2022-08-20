$(function(){

	// Lista de Continentes
	$.post( '../../vista/funciones/doce.php' ).done( function(respuesta)
	{
		$( '#doce' ).html( respuesta );
	});

	// lista de Paises
	$('#doce').change(function()
	{
		var el_continente = $(this).val();

		// Lista de Paises
		$.post( '../../vista/funciones/class.php', { continente: el_continente} ).done( function( respuesta )
		{
			$( '#class' ).html( respuesta );
		});
	});



	// Lista de Ciudades
	$( '#class' ).change( function()
	{
		var pais = $(this).val();
		
		$.post( '../../vista/funciones/sece.php', { paises: pais} ).done( function( respuesta )
		{
			$( '#seccion' ).html( respuesta );
		});	
		
	});
	
	
	
	
	
	//LISTA DE alumnos
	
		$( '#seccion' ).change( function()
	{
		var sec = $(this).val();
		
		$.post( '../../vista/funciones/alumno.php', { secciones: sec} ).done( function( respuesta )
		{
			$( '#alumnos' ).html( respuesta );
		});	
		
	});
	

})
