<?php


	function xpto(){
		echo "Hello World!!";
	};
	
	//exemplo de constante simbolica
	define ("PI", 3.1415);
	define ("CREATE_BD", "Create schema minha bd;");
	
	$i=10; //int
	echo $i.PHP_EOL;
	$i=10.2; //float
	echo $i.PHP_EOL;
	$i="axe"; //string avaliativa
	echo $i.PHP_EOL;
	$i='axe'; //string literal
	echo $i.PHP_EOL;
	$i=true; //boolean
	echo $i.PHP_EOL;
	$i=xpto; //function
	echo $i.PHP_EOL;
	$i= Date("Y-m-d G:i:s"); //objeto instancia
	echo $i.PHP_EOL;
	
	xpto();
	echo PI;
	
	
?>