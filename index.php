<html>
<h1>HOLA A TODOS</h1>

<form>
<input type="email" name="email"/>
<button>SUBSCRIBETE</button>
</form>

<?php

if(isset($_GET))


$f=fopen('email.txt','a');

fwrite($f,$_GET['email']."\r\n");

fclose($f)

?>
</html>