<html>
<head>
<title> Practica 10 PHP </title>
</head>

		<body>
		<?php
		//nombre del alumno
		//Usando variable en php
		echo "<h1>variable</h1>";
		$nombre='Jose Luis';//tipo cadena
		$apellidos='Martinez Perez';
		$edad=20;
		$salario=12345.50;
		$fechadenacimiento='24/08/96';
		$estatus=true;
		echo $nombre.'</br>';
		echo $apellidos.'</br>';
		echo 'Nombre Completo'.$nombre.' '.$apellidos.'</br>';
		echo 'TU EDAD ES: '.$edad.'</br>';
		echo 'TU SALARIO ES: ' .$salario.'</br>';
		?>
		<h1> OPERADORES ARITMETICOS </h1>
		<?php
			$a=5;
			$b=3;	
			$Suma=$a+$b;
			$Resta=$a-$b;
			$Multiplica=$a*$b;
			$Divide=$a/$b;
			echo 'La suma de ' .$a.' + '.$b.' es: '.$Suma.'</br>';
			echo 'La resta de ' .$a.' - '.$b.' es: '.$Resta.'</br>';
			echo 'La Multicacion de ' .$a.' * '.$b.' es: '.$Multiplica.'</br>';
			echo 'La Division de ' .$a.' / '.$b.' es: '.$Divide.'</br>';
		?>
</body>
</html>