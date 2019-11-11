<html>
	<head>
		<title> Pagina HTML</title>
		<style>
			table, th, td {
			border: 1px solid black;
			}
		</style>
	</head>
	<body bgcolor="#E6E6FA">
		<h1>Hola Mundo</h1>
			<p>Esta pagina es una demostracion del uso de html.
		<h2>¿De que parte del Mundo?</h2>
		 <center><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/1200px-Flag_of_Spain.svg.png" width="500" height="300"></center>
		 <p> ¿Te gusta España? Mete tus datos. </br><font size="3" color="red"> <i><u>VIVA ESPAÑA</u></i></font>
			 <form>
				<input type="email" name="email"/>
				<button>Enviar</button>
			</form>
		<h3>Encargados de la pagina</h3>
			
	<table style="width:100%">
	  <tr>
		<th>Autonomia</th>
		<th>Provincia</th>
	  </tr>
	  <tr>
		<td>Cantabria</td>
		<td>Santander</td>
	  </tr>
	  <tr>
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