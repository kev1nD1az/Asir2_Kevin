<html>
	<head>
	<meta charset="UTF-8"/>
		<title> RIOS</title>
	</head>
	<body bgcolor="#E6E6FA">
	<center>
	<table width="75%">
		<h1>España</h1>
			<p>En esta pagina vamos a ver lo mas tipico de España
		<h2>Geografia</h2>
		 <center><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/1200px-Flag_of_Spain.svg.png" width="500" height="300"></center>
		 <p> ¿Te gusta España? Mete tus datos. <br/><font size="3" color="red"> <b><u>VIVA ESPAÑA</u></b></font>
			 <form>
				<input type="email" name="email"/>
				<button>Enviar</button>
			</form>
	<table border="1" width="1000" align="center" >
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
	
	<h2>Gastronomia</h2>
	
		<p>La gastronomia española tiene los mejores platos.
		
		<h3>Tortilla Española</h3>
			La tortilla española se hace con patata, cebolla y huevos. Es sabrosa.
		<h3>Paella</h3>
			La paella es uno de los platos mas conocidos de españa y tiene muchas fotrmas de prepararlo
	<h2>Folclore</h2>
		Folclore de españa. En este caso empecemos con cantabria.
		<h3>Ojancanos</h3>
			Los ojancanos son unos monstruos mitologicos cantabros. 
	</table>
	</center>
	</body>
<?php

if(isset($_GET['email'])){
	

$f=fopen('España.txt','a');

fwrite($f,$_GET['email']."\r\n");

fclose($f);
}
?>
</html>