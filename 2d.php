<?php

function calcula($a,$b){

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

	if($b!=0){
		echo '<div>';
		echo 'División de '.$a.' / '.$b.' = ';
		echo $a/$b;
		echo '</div>'; 
}
}
calcula(5,5);
?>	