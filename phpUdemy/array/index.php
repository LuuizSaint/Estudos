<?php
//range(start, end, step);
$arrayRange = range(1, 10); // Cria um array do 1 ao 10;
$arrayEven = range(0, 10, 2);

$arrAula45 = range(10, 45);
foreach($arrAula45 as $num){
    $num += 6;
    ($num > 30)? "{$num} É mto alto! <br>" : "$num <br>";
}

//count(array)
$arrCount = range(1, 546);
count($arrCount); // Retorna a qtd de elmnts no array

$arrMultDim = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

foreach($arrMultDim as $arr => $nums){
    // echo "Array: " . $arr+1 . " = ";

    foreach($nums as $num){
        // echo "{$num}";
    }
}

$arrList = ['Luizin', 'Programmer', 24];
list($name, $fun, $age) = $arrList; // Atribuindo os valores do array a vaiaveis.
// OU
[$var1, $var2] = explode('/', "Valor1/Valor2"); // Podemos passar tanto Arrays como Strings

// array_slice(arr, start, end(optional)) Não modifica o array original
$arrSlice = ['Bacaxi', 'Muranguin', 'Perinha', 'Bacatizin', 'Naninha'];
array_slice($arrSlice, 1); // Retona um arr somente com os elmnt presentes no intervalo passado

$arrChunk = range(1, 10);
// array_chunk(arr, qtd) Gera varios arrays com a qtd passada
array_chunk($arrChunk, 3);

$arrAssoc = [
    'firstName' => 'Robertin',
    'lastName' => 'DGzin',
    'age' => 12,
    'func' => 'Programmer'
];

array_keys($arrAssoc); // Retona as keys do array
array_values($arrAssoc); // Retona os values do array

array_key_exists("print", $arrAssoc); // Retorna true se existir a key e false para não

$arrSplice = $arrSlice;
// array_splice(arr, start, end(opitional), arr(serve para repor os valores é opitional)) 
array_splice($arrSplice, 1, 3); //Remove e resgata os valores, altera o array original

$arrExtract = $arrAssoc;
// extract(arr) Transforma as keys em variaveis com o valor dos values, sobrepoem caso já exista
extract($arrExtract);


$marca = "Audi";
$modelo = "RS6";
$cor = "Vermelho";
$portas = 4;
$ipva = true;
// compact(var_name.., var_name) Trasnforma variáveis em um array
$carro = compact("marca", "modelo", "cor", "portas", "ipva");


// in_array(item, arr) Retona um bool caso encontre o valor passano no array
in_array("RS6", $carro); //Out: bool(true) 
in_array("Jorge", $carro); //Out: bool(false) 


$arrReduce = [1, 5, 23, 4, 567, 33, 23, 56, 0, 98, 123];
// array_reduce(arr, callback) Reduz o array em apenas um valor
$result = array_reduce($arrReduce, function($a, $b) {
    return $a + $b;
});

$arrUnique = [1, 2, 2, 3, 4, 4];
// array_unique(arr) para remover valores duplicados
$uni = array_unique($arrUnique);
$uni; // [1, 2, 3, 4]

$arrMap = [1, 2, 3, 4];
// array_map(callback, arr) Realiza uma operação em cada elmnt do array
$doble = array_map(fn($n) => $n * 2, $arrMap);
$doble; // [2, 4, 6, 8]

sort($arrReduce); //Ordena o array em ordem crescente
rsort($arrSlice); //Ordena o array em ordem decrescente
$arrReduce; //Out: Array ( [0] => 0 [1] => 1 [2] => 4 [3] => 5 [4] => 23 [5] => 23 [6] => 33 [7] => 56 [8] => 98 [9] => 123 [10] => 567 ) 
$arrSlice; //Out: Array ( [0] => Perinha [1] => Naninha [2] => Muranguin [3] => Bacaxi [4] => Bacatizin ) 

$arrSort = [
    "Pedrin" => 23,
    "Robertin" => 2,
    "Duardin" => 14,
    "Guizin" => 7,
    "Junin" => 20

];

asort($arrSort); //Ordena arrays associativos pelo value
// arsort(arr) Ordena decrescente
$arrSort; //Out: Array ( [Robertin] => 2 [Guizin] => 7 [Duardin] => 14 [Junin] => 20 [Pedrin] => 23 ) 

ksort($arrSort); //Ordena arrays associativos pela key
// krsort(arr) Ordena decrescente
$arrSort; //Out: Array ( [Duardin] => 14 [Guizin] => 7 [Junin] => 20 [Pedrin] => 23 [Robertin] => 2 ) 


$arrReverse = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// array_reverse(arr) Inverte a ordem do array
$newArrReverse = array_reverse($arrReverse);
$newArrReverse; //Out: Array ( [0] => 10 [1] => 9 [2] => 8 [3] => 7 [4] => 6 [5] => 5 [6] => 4 [7] => 3 [8] => 2 [9] => 1 ) 

$arrShuffle = $arrReverse;
// shuffle(arr) Ordena de forma aleatoria o array
shuffle($arrShuffle);
$arrShuffle; //Out: Array ( [0] => 7 [1] => 10 [2] => 5 [3] => 3 [4] => 1 [5] => 8 [6] => 9 [7] => 6 [8] => 4 [9] => 2 ) 


$arrSum = $arrReverse;
// array_sum(arr) Soma todos os items do array
$sumArr = array_sum($arrSum);
$sumArr; //Out: 55

// array_merge(arr, arr..., arr) Uni arrays 
$arrMerge = array_merge($arrReverse, $arrSlice);
$arrMerge; //Out: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 [9] => 10 [10] => Perinha [11] => Naninha [12] => Muranguin [13] => Bacaxi [14] => Bacatizin ) 

$arrPerson = [
    "Pedrin" => 23,
    "Robertin" => 2,
    "Duardin" => 14,
    "Guizin" => 7,
    "Junin" => 20

];
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
<?php foreach($arrPerson as $key => $value): ?>
    <tr>
        <?php if($value >= 18): ?>
        <td>
            <?= $key; ?>
        </td>
        <td>
            <?= $value; ?>
        </td>
        <?php endif; ?>
    </tr>
<?php endforeach; ?>
</table>
</body>
</html> -->
