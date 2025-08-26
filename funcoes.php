<?php 

	function titulo(){

		echo ("Calculando valores... <br />");

	}

	function somaValores($a, $b){

		$resp = $a + $b;

		return $resp;
	}

	function somaValores2($a, $b){

		return ($a + $b);
	}

	$num1 = 10; $num2 = 20;

	titulo();
	$resposta = somaValores($num1, $num2);
	$resposta2 = somaValores2($num1, $num2);

	$somando = somaValores(30, 40)+somaValores2(50, 60);

	echo("A soma de $num1 e $num2 é $resposta <br />");
	echo("A soma de $num1 e $num2 é $resposta2");
	echo("<br /> $somando");
 ?>

