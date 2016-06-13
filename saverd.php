<?php 
	include_once 'core/xconfig.php';
	include_once 'core/conn.php';
	include_once 'core/functions.php';
	// Validamos si se ha enviado desde front POST y FILES
		// echo $_POST['nomFile']; //Parámetro alternativo
		// echo $_POST['rdrNum']."<br>"; 
		// echo $_POST['rdrFecha']."<br>";
		// echo $_POST['rdrActo']."<br>";
		// echo $_POST['rdrPersona']."<br>";
	if ($_POST) {
		if ($_POST['rdrNum'] != '' && $_POST['rdrFecha'] != '' && $_POST['rdrActo'] != '' && $_POST['rdrPersona'] != '') {

	if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK && isset($_POST['rdrFecha'])) {
		$onlyYearIn1 = explode("-", $_POST['rdrAnio']);
		$onlyYearIn2 = explode("-", $_POST['rdrFecha']);
		// echo "rdrAnio: ".$onlyYearIn1[1]." rdrFecha: ".$onlyYearIn2[2];
		if (validate_year($onlyYearIn1[1],$onlyYearIn2[2])) {

		$nomArchivo = $_FILES['file']['name'];
		//Concatenamos numero de RD y el año => codigo de RD
		$rdrCodigo = $_POST['rdrNum'].$_POST['rdrAnio'];
		//Sepadando extensión el fichero para validar si es PDF.
		$fileExt = explode(".", $_FILES['file']['name']);
		//[0]  => nombre sin  extensión
		//[1]  => only  extensión
		$fileName = $fileExt[0];
		// echo "Error: ".$_FILES['file']['error']."<br>";
		// echo "Name: ".$_FILES['file']['name'];
		// Validamos que sea un archivo application/pdf
			if ($_FILES['file']['type'] === 'application/pdf'){
				// Verificamos si existe en el dir
				if( file_exists("files/".$onlyYearIn1[1]."/".$_FILES['file']['name']) ){
					alertas(0, $nomArchivo);
				// Verificamos si existe en la BD
				}elseif (id_exists($rdrCodigo)) {
					alertas(5,$rdrCodigo);
				}
				else{
					$ftn = $_FILES['file']['tmp_name'];
					// If check  esstá desacticado -> Renombramos
					if ( isset($_POST['nomFile']) && $_POST['nomFile'] != "" ) {
						$dest = makeDir($_POST['rdrAnio']);
						$fileName = $_POST['nomFile'];
						// $dst = "files/".$_POST['nomFile'].".".$fileExt[1];
						$dst = $dest.$_POST['nomFile'].".".$fileExt[1];
					//Else->el archivo conserva su nombre
					}else{
						$dest = makeDir($_POST['rdrAnio']);
						$dst = $dest.$_FILES['file']['name']; 
					}
					//
					if(move_uploaded_file($ftn, $dst))
					{
						// iniciar transacción 
						$con->beginTransaction();

						try { 
						// $query = "INSERT INTO files VALUES (NULL, '".$fileName."', '".$dst."')";
							// TABLA resolucion
							$query = "INSERT INTO resolucion (id_resol, numero, fecha, tema, url_pdf, id_director) VALUES (NULL, :numero, :fecha, NULL, :ruta, 1)";
							// $stmt = $con->prepare($query);
							$stmt = $con->prepare($query);
							$stmt->bindParam(':numero', $rdrCodigo);
							$stmt->bindParam(':fecha', $_POST['rdrFecha'] );
							$stmt->bindParam(':ruta', $dst );
							$stmt->execute();
							// Tabla beneficiario
							$query = "INSERT INTO beneficiario(nombre, id_resol) VALUES (:nombre, :numero)";
							$stmt = $con->prepare($query);
							$stmt->bindParam(':nombre', $_POST['rdrPersona'] );
							$stmt->bindParam(':numero', $rdrCodigo );
							$stmt->execute();
							// Tabla detalle_rd_acto
							$query = "INSERT INTO detalle_rd_acto(id,id_resol, id_acto) VALUES (NULL,:numero, :num_acto)";
							$stmt = $con->prepare($query);
							$stmt->bindParam(':numero', $rdrCodigo);
							$stmt->bindParam(':num_acto', $_POST['rdrActo'] );
							$stmt->execute();

							$con->commit();
							alertas(4,$rdrCodigo);
							// clearstatcache();
						} catch (PDOException $e) { 
							// si ocurre un error hacemos rollback para anular todos los insert 
							$con->rollback(); 
							echo $e->getMessage();
							// clearstatcache();
						} 
					}
				}
			}else{
				alertas(1,''); //No es pdf
			}
		}else{
			alertas(6,''); //No coincide
		}
	}else{
		alertas(2,'');
	}

// Validation metodo POST
		}else{
			alertas(3,'');
		}

	}else{
		echo "<p class=\"alert alert-warning\" id=\"mensaje\">Hola que hace?</p>";
	}

 