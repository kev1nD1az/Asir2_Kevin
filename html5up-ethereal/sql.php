<?php

session_start();
if(isset($_post['password'])){
	if ($_post['password'])
		$_SESSION['ok']=1;
	if (!isset($_SESSION['ok']))
		echo '<form action="/my-handling-form-page" method="post"> 
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" />
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="Password" />
    </div>
    <div class="button">
        <button type="login">Inicia sesion</button>
    </div>
			</form>';
	exit();
}
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