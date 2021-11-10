<?php
	session_start();
	if(!$_SESSION['verificar']){
		header("Location: index.php");
	}
	echo $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Leer o seleccionar datos de la base de datos</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Actualizar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php
                //voy a requerir el archivo de conexion con riquire
				require_once "php/connect.php";
				$query="SELECT * FROM usuario";
                //ahora requiero una variable que se llame consulta 1
                //despues paso por parametros la variable query
				$consulta1=$mysqli->query($query);
				while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
					echo "<tr>
						<td>".$fila['id']."</td>
						<td>".$fila['Nombre']."</td>
						<td>".$fila['Apellido']."</td>
						<td>".$fila['Email']."</td>
						<td><a href='actualizar.php?id=".$fila['id']."'>Actualizar</a></td>
						<td><a href='eliminar.php?id=".$fila['id']."'>Eliminar</a></td>
					</tr>";
				}
			?>			
		</tbody>
	</table>
	<a href="logout.php">Cerrar sesion</a>
</body>
</html>