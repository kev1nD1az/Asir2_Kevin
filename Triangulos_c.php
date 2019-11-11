	<form>
		<button href="http://localhost/asir2_kevin/triangulos_c.php">Reset</button>
	</br>
	</form>
	
		<form>
			Dato 1 - <input name="A1"/> </br>
			Dato 2 - <input name="A2"/> </br>
			Dato 3 - <input name="A3"/> </br></br>
			<button>Start</button> </br></br>
	</form>


<?php
	function T($a,$b,$c,$A,$B,$C){
	
		$a=$A;
		$b=$B;
		$c=$C;
	
			return L($a,$b,$c). A($A,$B,$C);
	
	}
	function L($a,$b,$c){
	
		if(is_numeric($a) && is_numeric($b) && is_numeric($c) && ($a)>0 && ($b)>0 && ($c)>0){
			if((($a)+($b)+($c))==180){
				if($a==$b && $a==$c){
					$r='Equilátero ';
				}elseif($a==$b || $a==$c || $b==$c){
					$r='Isósceles ';
				}else
					$r='Escaleno ';
				return $r;
			}
	}
}
	function A($A,$B,$C){
	
		if(is_numeric($A) && is_numeric($B) && is_numeric($C) && ($A)>0 && ($B)>0 && ($C)){
			if((($A)+($B)+($C))==180){
				if($A==90 || $B==90 || $C==90){
					$r='y rectángulo.';
				}elseif($A>90 || $B>90 || $C>90){
					$r='y obtusángulo.';
				}else
					$r='y acutángulo.';
				return $r;
			
			}else
		
			echo 'Datos incorrectos, los angulos no suman 180º.';
	}else
			
			echo 'Introduce datos validos';
	
}
		if(isset($_GET['A1'], $_GET['A2'], $_GET['A3'])){
	
			echo T(1,1,1,($_GET['A1']),($_GET['A2']),($_GET['A3']));
	
}else
			echo 'A la espera de datos que analizar';
			echo '<br><br>Prueba:<br><br>';
			echo T(1,sqrt(2),1,45,90,45).' rectángulo-isósceles<br/>';
			echo T(1,sqrt(2),1,45,45,90).' rectángulo-isósceles<br/>';
			echo T(1,sqrt(2),1,90,45,45).' rectángulo-isósceles<br/>';
			echo T(1,1,1,60,60,60).' acutángulo-equilátero<br/>';
			echo T(1,1,1,100,40,40).' obtusángulo-isósceles<br/>';
?>