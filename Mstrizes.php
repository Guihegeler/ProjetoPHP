<?php 


/*
	$matrizA = [
    [25, 12, 35],
    [85, 47, 98],
    [32, 38, 105]
];
 
	$matrizB = [
    [98, 65, 35],
    [5, 27, 8],
    [74, 14, 3]
];
 
	$resultado = [];
 
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $resultado[$i][$j] = $matrizA[$i][$j] + $matrizB[$i][$j];
    }
}
 
echo "Matriz resultado:<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $resultado[$i][$j] . " ";
    }
    echo "<br>";
}

 $somaA = 0;

	for ($i=0; $i < 3 ; $i++) { 
		for ($j=0; $j < 3; $j++) { 
			$somaA = $somaA + $matrizA[$i][$j];
		}
	}

	 $somaB = 0;

	for ($i=0; $i < 3 ; $i++) { 
		for ($j=0; $j < 3; $j++) { 
			$somaB = $somaB + $matrizB[$i][$j];
		}
	}

	 $somaC = 0;

	for ($i=0; $i < 3 ; $i++) { 
		for ($j=0; $j < 3; $j++) { 
			$somaC = $somaC + $resultado[$i][$j];
		}
	}

	echo "<pre>";
	print_r($somaA . "\n");
	print_r($somaB . "\n");
	print_r($somaC . "\n");
	echo "</pre>";
*/


	$alunos = [

		["nome" => "debs", "nota" => 10.0],
		["nome" => "hegeler", "nota" => 5.0],
		["nome" => "sabrina", "nota" => 10.0],
		["nome" => "vitoria", "nota" => 10.0],
		["nome" => "suamae", "nota" => 0.0],
		["nome" => "slavefe", "nota" => 8.0],
		["nome" => "pedro", "nota" => 6.0],
		["nome" => "guilherme", "nota" => 8.0],
		["nome" => "isonha", "nota" => 9.0],
		["nome" => "vivianne", "nota" => 7.0],

	];


	$somaNotas = 0; 
	$maiorNota = 0;
	$melhorAluno = "";

	foreach ($alunos as $aluno);
	 $somaNotas += $aluno["nota"];
    if ($aluno["nota"] > $maiorNota) {
        $maiorNota = $aluno["nota"];
        $melhorAluno = $aluno["nome"];
    }

 
$media = $somaNotas / count($alunos);
 
echo "Média da classe: $media <br>";
echo "Aluno com maior nota: $melhorAluno ($maiorNota)<br>";


 ?>