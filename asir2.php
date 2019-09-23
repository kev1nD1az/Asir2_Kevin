<html>
<h1>Ips COMPAÑEROS</h1>
<a href="https://192.168.0.91/asir2.php">Daniel Hernandez</a></br>
<a href="https://192.168.0.85/asir2.php">Jaime Garcia</a>
<?php



$f=fopen('visitas.txt','a');

fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");

fclose($f)



?>
</html>