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

/*
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
*/


/*
	$meses = [
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
];
 
$numero = 9; 
echo "Mês correspondente: " . $meses[$numero];
*/

$pessoas = [
    ["nome" => "Ana", "cidade" => "Santos", "idade" => 20, "sexo" => "F"],
    ["nome" => "Bruno", "cidade" => "São Paulo", "idade" => 17, "sexo" => "M"],
    ["nome" => "Carlos", "cidade" => "Santos", "idade" => 25, "sexo" => "M"],
    ["nome" => "Daniela", "cidade" => "Rio de Janeiro", "idade" => 30, "sexo" => "F"],
    ["nome" => "Eduardo", "cidade" => "Santos", "idade" => 19, "sexo" => "M"],
    ["nome" => "Fernanda", "cidade" => "São Paulo", "idade" => 16, "sexo" => "F"],
    ["nome" => "Gabriel", "cidade" => "Santos", "idade" => 22, "sexo" => "M"],
    ["nome" => "Helena", "cidade" => "Curitiba", "idade" => 27, "sexo" => "F"],
    ["nome" => "Igor", "cidade" => "Santos", "idade" => 18, "sexo" => "M"],
    ["nome" => "Juliana", "cidade" => "São Paulo", "idade" => 21, "sexo" => "F"]
];
 
echo "Lista de nomes e idades:<br>";
foreach ($pessoas as $p) {
    echo $p["nome"] . " - " . $p["idade"] . " anos<br>";
}
 
echo "<br>";
 
echo "Moradores de Santos:<br>";
foreach ($pessoas as $p) {
    if ($p["cidade"] == "Santos") {
        echo $p["nome"] . "<br>";
    }
}
 
echo "<br>";
 
// 3. Quem tem mais de 18 anos
echo "Maiores de 18 anos:<br>";
foreach ($pessoas as $p) {
    if ($p["idade"] > 18) {
        echo $p["nome"] . "<br>";
    }
}
 
echo "<br>";
 
$contaHomens = 0;
foreach ($pessoas as $p) {
    if ($p["sexo"] == "M") {
        $contaHomens++;
    }
}
echo "Total de homens cadastrados: $contaHomens<br>";


 ?>