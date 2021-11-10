<?php
require_once"../php/connect.php";
    $nombre =$_POST['nombre'];
	$apellido =$_POST['apellido'];
	$email =$_POST['email'];
    //pasamos nuestra clave a un md5
	$clave=md5($_POST['clave']);
    //ya hemos almacenado todos los valores que hemos recuperado por el metodo post
    //creamos una variable query que es donde va almacenar la colsulta de la base de datos
    //en values pasamos las variables de arriba
	$query="INSERT INTO usuario(Nombre,Apellido,Email,Clave) VALUES('$nombre','$apellido','$email','$clave')";
	//creamos una condicional para saber si esta consulta se ha ejecutado satisfactoriamente
    //entre parentesis colocamos la variable query de nuestra consulta
    if(consultarSQL($query)){
		echo "Datos guardados";
	}else{
		echo "Ocurrio un error";
	}
?>