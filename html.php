<html>
	<head>
	<meta charset="UTF-8"/>
		<title> RIOS</title>
	</head>
	<body bgcolor="#E6E6FA">
		<h1>Bienvenidos a españa</h1>
			<p>En esta pagina vamos a ver las provincia de autonomías bañadas por el Cantábrico.
		<h2>Las principales son:</h2>
		 <center><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/1200px-Flag_of_Spain.svg.png" width="500" height="300"></center>
		 <p> ¿Te gusta España? Mete tus datos. </br><font size="3" color="red"> <b><u>VIVA ESPAÑA</u></b></font>
			 <form>
				<input type="email" name="email"/>
				<button>Enviar</button>
			</form>
		<h3>Tabla</h3>
			
	<table border="1" width="1000" align="center">
	  <tr align="center">
		<th bgcolor="#ffff00">Autonomia</th>
		<th bgcolor="#ff0000">Provincia</th>
	  </tr>
	  <tr align="center">
		<td>Cantabria</td>
		<td>Santander</td>
	  </tr>
	  <tr align="center">
		<td>Asturias</td>
		<td>Castropol</td>
	  </tr>
	</table> 
	</body>
<?php

if(isset($_GET['email'])){
	

$f=fopen('España.txt','a');

fwrite($f,$_GET['email']."\r\n");

fclose($f);
}
?>
</html>