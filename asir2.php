<html>
<h1>Ips COMPAÑEROS</h1>
<a href="https://192.168.0.108/asir2_jaime/asir2.php">Jaime Garcia</a></br>
<a href="https://192.168.0.99/asir2_kimberly/asir2.php">Kimberly</a>
</html>
<?php
$dns=[
	'192.168.0.108'=>'  Jaime',
	'192.168.0.100'=>'  Jose Luis',
	'192.168.0.99'=>'  Kim',
	'::1'=>'  Kevin',
	];

$f=fopen('registro.txt','a');
fwrite($f, date('Y-m-d H:i:s').($dns[$_SERVER['REMOTE_ADDR']]."\r\n"));
fclose($f);
?>