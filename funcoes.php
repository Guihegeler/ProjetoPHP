<?php 

	function titulo(){

		echo ("Calculando valores... <br />");

	}

	function somaValores($a, $b){

		$resp = $a + $b;

		echo("A soma de $a e $b é $resp");
	}

	$num1 = 10; $num2 = 20;

	titulo();
	somaValores($num1, $num2);



 ?>

