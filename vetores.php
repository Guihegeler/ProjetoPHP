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

	/*
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
	*/

	/*
	$nome1 = "Debs";
	$nome2 = "Guilherme";
	$nome3 = "Sabrina";
	$nome4 = "Guanabara";
	$nome5 = "Vagabunda";

	echo("$nome1<br/>$nome2<br/>$nome3<br/>$nome4<br/>$nome5<br/><br/>");

	$nomee = array("Debs","Guilherme","Sabrina","Guanabara","Vagabunda");

	echo "Os nomes no array: <br/>";

	foreach ($nomee as $nomes){
		echo "<br/>".$nomes;
	}
	*/

	/*
	echo("<br/>");

	$nome["MA"] = "Maria";
	$nome["PE"] = "Pedro";
	$nome["JO"] = "João";

	echo("<pre>");
	var_dump($nome);
	echo("</pre>");

	echo("<pres>");
	print_r($nome);
	echo("</pre>");
	*/

	$salarios = array("João" => 2000, "Pedro" => 1000, "Maria" => 500); 

	echo "Salário de João é " . $salarios['João'] . "<br/>";
	echo "Salário de Pedro é " . $salarios['Pedro'] . "<br/>";
	echo "Salário de Maria é " . $salarios['Maria'] . "<br/><br/>";

	$salarios['João'] = "Alto"; 
	$salarios['Pedro'] = "Médio"; 
	$salarios['Maria'] = "Baixo";

	echo "Salário de João é " . $salarios['João'] . "<br/>";
	echo "Salário de Pedro é " . $salarios['Pedro'] . "<br/>";
	echo "Salário de Maria é " . $salarios['Maria'] . "<br/>";



 ?>