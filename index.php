<html>
<h1>HOLA A TODOS</h1>
<h1>Ips COMPAÑEROS</h1>
<a href="http://192.168.0.91/index.php">Daniel Hernandez</a></br>
<a href="http://192.168.0.36/asir2_James/index.php">Jaime Garcia</a>


<form>
<input type="email" name="email"/>
<button>SUBSCRIBETE</button>
</form>

<?php

if(isset($_GET['email'])){
	

$f=fopen('email.txt','a');

fwrite($f,$_GET['email']."\r\n");

fclose($f);
}
?>
</html>