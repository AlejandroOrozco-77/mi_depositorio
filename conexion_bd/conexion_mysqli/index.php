<?php
require_once "php/connect.php";
//creamos una variable y vamos a guardar la consulta a la base de datos.
$query = "INSERT INTO usuario(Nombre,Apellido, Email, Clave) VALUES ('Jose','Garcia','btb425@yahoo.com','Clave')";
$query2 = "INSERT INTO usuario(Nombre,Apellido, Email, Clave) VALUES ('Andrea','Pico','andreita@yahoo.com','Clavde')";
//llamamos el metodo y ponemos entre parentesis la variable creada
consultarSQL($query);
consultarSQL($query2);
?>