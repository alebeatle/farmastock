<?php

	$cadena = file_get_contents("datos.txt");

	$cadena .= "\r\nMe encanta PHP!";
	file_put_contents("datos.txt", $cadena);

?>