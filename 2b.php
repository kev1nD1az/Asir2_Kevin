<?php

function calcula(){
	$a=2;
	$b=8;
	echo '<div>';
	echo 'Suma de '.$a.' + '.$b.' = ';
	echo $a+$b;
	echo '</div>';

	echo '<div>';
	echo 'Resta de '.$a.' - '.$b.' = ';
	echo $a-$b;
	echo '</div>';

	echo '<div>';
	echo 'Multiplicación de '.$a.' x '.$b.' = ';
	echo $a*$b;
	echo '</div>';

	echo '<div>';
	echo 'División de '.$a.' / '.$b.' = ';
	echo $a/$b;
	echo '</div>'; 
}
calcula();
?>	