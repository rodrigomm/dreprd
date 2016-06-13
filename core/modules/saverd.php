<?php 
	include_once '../xconfig.php';
	include_once '../conn.php';
	// Validamos si se ha enviado desde front POST y FILES
	if (isset($_POST['nomFile'])) {
		echo $_POST['nomFile']; //Parámetro alternativo
		echo $_POST['rdrNum']."<br>"; 
		echo $_POST['rdrFecha']."<br>";
		echo $_POST['rdrActo']."<br>";
		echo $_POST['rdrPersona']."<br>";
		echo $_POST['rdrFile']."<br>";
	}
	if ( isset($_FILES['file']) ) {
		$fileExt = explode(".", $_FILES['file']['name']);  //Falta validar si se envía vacío
		$fileName = $fileExt[0];
		// echo $fileExt[0]."<br>";
		// echo $fileExt[1];

		if ($fileExt[1] != 'pdf' || $fileExt[1] != 'PDF') {
			if( file_exists("files/".$_FILES['file']['name']) ){
				echo $_FILES['file']['name']." ya existe!";
			}else{
				$ftn = $_FILES['file']['tmp_name'];
				// $dst = "./images/".$_FILES['file']['name'];
				$dst = $_POST['nomFile'].".".$fileExt[1];
				// $root = getcwd();
				// echo $root.$dst;
				if(move_uploaded_file($ftn, '\.\.'.$dst))
				{
					// $query = "INSERT INTO files VALUES (NULL, '".$fileName."', '".$dst."')";
					// $query = "INSERT INTO files VALUES (NULL, '".$_POST['nomFile']."', '".$dst."')";
					$query = "INSERT INTO resolucion (id_resol, numero, fecha, tema, url_pdf, id_director) VALUES (NULL, :numero, :fecha, NULL, :ruta, 1)";
					// $query = "INSERT INTO files VALUES (NULL, '".$_POST['nomFile']."', '".$dst."')";
					$stmt = $con->prepare($query);
					$stmt->bindParam(':numero', $_POST['rdrNum'] );
					$stmt->bindParam(':fecha', $_POST['rdrFecha'] );
					$stmt->bindParam(':ruta', $dst );
					$stmt->execute();
					echo "Archivo cargado!";
				}
			}
		}else{
				echo "El arhivo debe ser .PDF";
		}
	}else{
		echo "No se a selecciona ningun Archivo";
	}

 