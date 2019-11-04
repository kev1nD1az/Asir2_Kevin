<?php

function Triangulos($a, $b, $c){
	$r='equilatero';
	if($a==$b and $b==$c) $r='Equilatero';
	if($a==$b or $b==$c) $r='Isosceles';
	if($a!=$b and $b!=$c and $a!=$c) $r='Escaleno';
	return $r;
}
echo Triangulos(5, 5, 3);
?>