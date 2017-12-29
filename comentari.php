<?php 
$comentari=$_POST['comentari'];

$leer=fopen("data.data","r");
$aleer=fread($leer,filesize("data.data"));

	$escriure=fopen("data.data","w");
	fwrite($escriure,"<p>$comentari</p>$aleer");
	fclose($escriure);
?>