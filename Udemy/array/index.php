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


?>
