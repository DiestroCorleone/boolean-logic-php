<!DOCTYPE html>
<html>
<head>
	<title>Calcular Salario</title>
</head>
<body>
	<?php
		$datein = $_POST["datein"];
		$category = $_POST["category"];
		$hours = $_POST["hours"];
		$currentDate = date('Y-m-d');

		$newDate = new DateTime($currentDate);
		$oldDate = new DateTime($datein);
		$antiguedad = $oldDate->diff($newDate)->y;

		echo "Tu salario es de $" .parametrosSalary($category, $hours, $antiguedad). ".-";

		function parametrosSalary($category, $hours, $antiguedad){
			switch ($category) {
				case 'A':
				case 'B':
					if($hours >= 8){
						$salario = 420;
					}else{
						$salario = 400;
					}					
					break;
				case 'C':
					if($hours >= 8){
						$salario = 220;
					}else{
						$salario = 200;
					}					
					break;					
				case 'D':
				case 'E':
					if($hours >= 8){
						$salario = 120;
					}else{
						$salario = 100;
					}	
			}

	if($antiguedad >= 5 && $antiguedad < 15){
		$salario = $salario + ($salario*0.3);
	}else if($antiguedad >= 15){
		if($category == 'A' || $category == 'B' || $category == 'C'){
			$salario = $salario + ($salario*0.6);
		}else if($category == 'D' || $category == 'E'){
			$salario = $salario + ($salario*0.5);
		}
	}
			return $salario;
		}
	?>
</body>
</html>