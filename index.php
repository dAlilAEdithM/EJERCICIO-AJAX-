<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Escuela Butler PdR</title>
	<script src="js/jquery-1.11.3.js"></script>
	<style>

	body{
		background-image: url("img/moon.jpg");
		background-repeat: no-repeat;
		border-width: left;
		color
	}
	label{
		color: #FFCCCC;
	}
	form{
		color: #CCCCCC;
	}
	
	i{
		font-size: 90px; 
		font-family: tahoma;
		color: #009999;
		text-shadow: 2px 2px #FFFF00;
	}

	</style>
</head>

<body> 
<center><strong><i>Escuela Butler PdR</i></strong></center>
	
<form action="#">

	 <label>Por favor digita tu nombre: </label> <br/> 
	 <input type="" name= "nombre" id = "" class="form-control"><br/><br/><br/>
	 <label>Por favor digita tu apellido: </label><br/>
	 <input type="" name= "apellido" id = "" class="form-control"><br/><br/><br/>


		<strong>Seleccione un Grado: </strong><br/>
		<select id="selectGrado" name="selectGrado">
			<option value="Seleccione">Seleccione</option>
			<option value="Primero">Primero</option>
			<option value="Segundo">Segundo</option>
		</select>


		<div id="resultado" >
			<legend><strong>Seleccione Un Grupo: </strong> </legend>
			<select id="selectAlumno" name="selectAlumno" class="form-control"> </select>
		</div>





	<script>
		//Funcion de JQuery
		$("#selectGrado").change(function() {
			var gradoVal = $("#selectGrado").val();
			$.ajax({
				method: "POST",
				url: "procesarAjax.php",
				data: {grado: gradoVal}
			})
			.done(function( msg ) {
				$("#resultado").html(msg);
			});
		});
	</script>


	<script>
		//Funcion de JQuery


//		$("#selectgrupo").change(function() {
//			var grupoval = $("#selectgrupo").val();
//			$.ajax({
//				method: "POST",
//				url: "procesarAjax",
//				data: { Grupo: grupoval}
//			})
//			.done(function( msg ) {
//				$("#resultado2").html(msg);
//			});
	//	});
		
	</script>
<!--

		<strong>Seleccione una Materia por favor: </strong><br/>
		<select id="selectMateria" name="selectMateria">
			<option value="Seleccione">Seleccione</option>
			<option value="Danzas">Danzas</option>
			<option value="Teatro">Teatro</option>
			<option value="Teatro">Musica</option>
			<option value="Dibujo">Dibujo</option>
		
		</select>
		<div id="resultado"></div>


-->
	<script>
		//Funcion de JQuery
		$("#selectMateria").change(function() {
			var materiav = $("#selectMateria").val();
			$.ajax({
				method: "POST",
				url: "",
				data: { materia: materiav}
			})
			.done(function( msg ) {
				$("#resultado").html(msg);
			});
		});
	</script>
</form>
</body>
</html>