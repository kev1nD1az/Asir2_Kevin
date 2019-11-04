<?php
function meses($n){
$n=2;
$meses=[
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre',
	'noviembre',
	'diciembre',
];
echo $meses[$n-2];

}

echo meses (1);
?>