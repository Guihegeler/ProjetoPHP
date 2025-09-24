<?php 

	/*
	$vetor = array();
	$vetor[0] = "debs";
	$vetor[1] = "gui";
	echo($vetor[0] . $vetor[1]);

	$burre = array("hegeler" , "ble");
	echo($burre[0] . $burre[1]);

	$idade[0] = 16;
	$idade[1] = 18;
	$idade[2] = 25;
	$idade[3] = 07;

	$email[] = "debsxerosa@gmail.com";
	$email[] = "hegelercuzao@hotmail.com";

	print_r($email);
	var_dump($email);
	*/

	/*
	$aluno = array("Osvaldo", 26, "emailZoado@outlook.com");

	echo("<pre>");
	print_r($aluno);
	echo("</pre>");
	*/


	/*
	for($i = 0; $i < 6; $i = $i + 1){
	$v[$i] = 10;}


	for($i = 0; $i < 6; $i++){
		echo "O valor: " . $vetor[$i] . "<br/>";
	}
	*/

	$num = array (1, 2, 3, 4, 5);

	foreach($num as $valor){
		echo "Valor é $valor <br />";
	}

	$num[0] = "um";
	$num[1] = "dois";
	$num[2] = "três";
	$num[3] = "quatro";
	$num[4] = "cinco";

	foreach($num as $valor){
		echo "Valor é $valor <br/>";
	} 




 ?>