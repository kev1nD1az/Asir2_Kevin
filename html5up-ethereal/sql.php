<?php
	//conectamos Con el servidor
	$conectar = new mysqli('localhost','id11961169_kevin','12345678','id11961169_formularios');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

	}
	
	//hacemos la sentencia de sql
	$sql="SELECT * FROM `Datos`";
	//ejecutamos la sentencia de sql
	$r=$conectar->query($sql)->fetch_all(MYSQLI_ASSOC);

	$s = '<table border="1">';
foreach ( $r as $c ) {
        $s .= '<tr>';
        foreach ( $c as $v ) {
                $s .= '<td>'.$v.'</td>';
        }
        $s .= '</tr>';
}
$s .= '</table>';

echo $s
	
?>