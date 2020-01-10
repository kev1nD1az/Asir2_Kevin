<?php
	//conectamos Con el servidor
	$conectar = new mysqli('localhost','id11961169_kevin','12345678','id11961169_formularios');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

	}
	//recuperar las variables
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO Datos VALUES('$name',
								   '$email',
								   '$message')";
	//ejecutamos la sentencia de sql
	$ejecutar=$conectar->query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>