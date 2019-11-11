<?php

function Triangulos($a, $b, $c){
	$r='Escaleno';
	if($a==$b or $b==$c or $a==$c) $r='Isosceles';
	if($a==$b and $b==$c) $r='Equilatero';
	return $r;
}
echo Triangulos(5, 5, 3).'=¿Isosceles?'.'</br>';
echo Triangulos(5, 5, 5).'=¿Equilatero?'.'</br>';
echo Triangulos(5, 3, 3).'¿=Isosceles?'.'</br>';
echo Triangulos(3, 5, 3).'¿=Isosceles?'.'</br>';
echo Triangulos(1, 5, 3).'¿=Escaleno?'.'</br>';
?>