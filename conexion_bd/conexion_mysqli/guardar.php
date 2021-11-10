<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./procesos/guardarDatos.php" method="POST">
		<label>Nombre</label><input type="text" name="nombre"><br><br>
		<label>Apellido</label><input type="text" name="apellido"><br><br>
		<label>Email</label><input type="email" name="email"><br><br>
		<labe>Clave</labe l><input type="password" name="clave"><br><br>
		<input type="submit" value="Guardar">
	</form>
</body>
</html>