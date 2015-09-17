<?php


?>



<?php 
	$miGrado = $_POST['grado'];
	$arrPrimero = array('grupo_A', 'grupo_B', 'grupo_C');
	$arrSegundo = array('grupo_A', 'grupo_c');
	$arrRecorrer;
	$miSelect = "<strong>Seleccione el grupo: </strong>";
	if($miGrado == 'Primero'){
		$arrRecorrer = $arrPrimero;
	}else if ($miGrado == 'Segundo'){
		$arrRecorrer = $arrSegundo;
	}
	$miSelect .= "<select id='alumno' name='alumno'>";
	foreach ($arrRecorrer as $nombre) {
		$miSelect .= "<option value=".$nombre.">".$nombre."</option>";
	}
	$miSelect .= "</select>";
	
	echo $miSelect;



/*
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$base = $_POST['base'];
	$grado = $_POST[''];
	$materia =  $_POST[''];

	$aux = 0;
	$sal = 0;

	$sal2 = 0;

	if ($grado == "Primero"){
		$sal = $base = 35000;
	}
	if ($grado == "Segundo"){
		$sal == $base * 70000; 
	}


	if($materia == "Danzas") {
		$aux = $sal * 0.20; 
	}
	if($materia == "Teatro") {
		$aux = $sal * 0.25; 
	}
	if($materia == "Musica") {
		$aux = $sal * 0.30; 
	}
	if($materia == "Dibujo") {
		$aux = $sal * 0.35; 
	}
	echo "El nombre del estudiante es: ".$nombre."".$apellido.""

 */


 ?>
 <?php

	$grupos = $_POST['Grupo']; 
	$arrgp=array('danzas','teatro','dibujo');
	$arrgs=array('danzas','musica'); 
	$arrgt=array('teatro','dibujo','musica');
	$arrreco;  
	$select="<strong> Seleccione una materia </strong>"
		//if ($grupos == 'grupo_A'){
		//$arrreco = $arrgp; 
	//}else if($grupos == 'grupo_B'){
	//	$arrreco = $arrgs;
	//}else if($grupos == 'grupo_C'){
//		$arrreco = $arrgt;
//	}
//	$select.="<select id='grupo' name='grupo> "; 
//	foreach ($arrreco as $nombre) {
//		$select .="<option value=".$nombre.">".$nombre."</option>"
//	}
//	$select .="</select>"; 
//	echo $select;


?>


