<?php 
	require '../conn.php';
	try {
		$sql = "SELECT * FROM acto_resolutivo";
		$stm = $con->prepare($sql);
		$stm->execute();

		$datos = "";

		if ($stm->rowCount() > 0) {
			while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
				$datos .='{ "id_acto": "'.$row['id_acto'].'", "descrip_acto": "'.$row['descrip_acto'].'" },';
			}
			$datos = substr($datos, 0, -1);
			$datos = "[".$datos."]";
			echo $datos;
		}else{
			echo '[{"id": "", "Nombre":""}]';
		}

	} catch (Exception $e) {
		
	}

 ?>