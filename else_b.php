<?php

function notas2($n){
	$r='Sobresaliente';
	if($n<8.5) $r='Notable';
	if($n<7) $r='Bien';
	if($n<6) $r='Suficiente';
	if($n<5) $r='Pendiente';
	return $r;
}
echo notas2(8.67);
?>