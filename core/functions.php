<?php 
	include_once 'xconfig.php';

	function id_exists($id){
		require('conn.php');
		$result = $con->query("SELECT COUNT(numero) FROM resolucion WHERE numero = '$id'");
		return ($result->fetchColumn() == 1) ? true : false;
	}
	function validate_year($d1, $d2){
		return ($d1 != $d2)? false : true;
	}
	// Crear directorio
	function makeDir($nomDir){
		$dir = explode("-", $nomDir);
		if (file_exists("files/".$dir[1]."/")) { //Si existe retornamos la misma ruta
			return "files/".$dir[1]."/";
		}else{ //Si no  exite la creamos
			mkdir("files/".$dir[1], 0700);
			return "files/".$dir[1]."/";
		}
	}
	
	function alertas($num,$x){
		if ($num == 0 ) {
			echo "<p class=\"alert alert-danger\" id=\"mensaje\">El documento <strong>".$x."</strong> ya existe en el servidor</p>";
		}elseif ($num == 1) {
			echo "<p class=\"alert alert-danger\" id=\"mensaje\">El arhivo debe ser .PDF</p>";
		}elseif ($num == 2) {
			echo "<p class=\"alert alert-danger\" id=\"mensaje\">No se seleccionó ningún fichero.</p>";
		}elseif ($num == 3) {
			echo "<p class=\"alert alert-warning\" id=\"mensaje\">No se ha completado todos los campos requeridos *</p>";
		}elseif ($num == 4) {
			echo "<p class=\"alert alert-success\" id=\"mensaje\">La resolución <strong>".$x."</strong> fue subido con éxito</p>";
		}elseif ($num == 5) {
			echo "<p class=\"alert alert-danger\" id=\"mensaje\">Ya existe el documento <strong>".$x."</strong> registrado en la BD</p>";
		}elseif ($num == 6) {
			echo "<p class=\"alert alert-warning\" id=\"mensaje\"><strong>N° Resolución Directoral*</strong> no coincide con la <strong>Fecha*</strong></p>";		
		}else{
			echo "";
		}
	}