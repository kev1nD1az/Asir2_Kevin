<?php
function calcula($a,$b){
	$r=null;
	$r=$r.'<div>';
$r=$r.'Suma de '.$a.' + '.$b.' = ';
$r=$r.($a+$b);
$r=$r.'</div>';

$r=$r.'<div>';
$r=$r.'Resta de '.$a.' - '.$b.' = ';
$r=$r.($a-$b);
$r=$r.'</div>';

$r=$r.'<div>';
$r=$r.'Multiplicación de '.$a.' x '.$b.' = ';
$r=$r.($a*$b);
$r=$r.'</div>';

$r=$r.'<div>';
$r=$r.'División de '.$a.' / '.$b.' = ';
$r=$r.($a/$b);
$r=$r.'</div>'; 
	return $r;
}
$b=calcula(5,5);
echo $b;
?>	