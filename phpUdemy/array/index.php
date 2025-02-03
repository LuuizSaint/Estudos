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


$arrReduce = [1, 5, 23, 4, 567, 33, 23, 56, 0, 98, 123];

$result = array_reduce($arrReduce, function($a, $b) {
    return $a + $b;
});

var_dump($result);
















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
