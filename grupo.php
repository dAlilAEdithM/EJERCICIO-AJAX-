<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body> 
	
	<form action="#">

	
		<strong>Seleccione un Grupo: </strong>
		<select id="selectGrado" name="selectGrado">
			<option value="Seleccione">Seleccione</option>
			<option value="Grupo_A">Grupo_A</option>
			<option value="Grupo_B">Grupo_B</option>
		</select>
		<div id="resultado"></div>
	</form>


	<script>
		//Funcion de JQuery
		$("#selectGrado").change(function() {
			var materiaval = $("#selectGrado").val();
			$.ajax({
				method: "POST",
				url: "Materia.php",
				data: { Materia: materival}
			})
			.done(function( msg ) {
				$("#resultado").html(msg);
			});
		});
	</script>

</body>
</html>