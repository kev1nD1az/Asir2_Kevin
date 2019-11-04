<?php
$dns=[
	'192.168.0.105'=>'  Jaime',
	'192.168.0.100'=>'  Jose Luis',
	'192.168.0.99'=>'  Kim',
	'192.168.0.70'=>'  Kevin',
	'::1'=>'  Kevin',
	];

$f=fopen('registro.txt','a');
fwrite($f, date('Y-m-d H:i:s').($dns[$_SERVER['REMOTE_ADDR']]."\r\n"));
fclose($f);
?>