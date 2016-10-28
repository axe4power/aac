<?php
	$joaquina = "anda de saia".PHP_EOL;
	function xpto2(){
			global $joaquina;
			echo $joaquina;
	}
	
	function xpto3(){
			echo $GLOBALS ['joaquina'];
	}
	xpto2();
	xpto3();

?>