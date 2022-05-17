function buscar_datos(consulta)
{
	$.ajax({
		url: 'buscar.php',
		type: 'POST',
		dataType: 'html',
	})
}