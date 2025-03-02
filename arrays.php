<?php

/*$numero = array ( 10, 15, 20, 25, 30, 35, 40, 45, 50, 55);

foreach($numero as $valor){
    echo $valor. '<br>';
}
array_push($numero, 60);
echo '<br>';
array_unshift($numero, 5);
echo '<br>';
foreach($numero as $valor){
    echo $valor. '<br>';
}*/


$numero = array(10, 15, 20, 25, 30, 35, 40, 45, 50, 55);

// Imprimindo os números originais
echo 'Array original: <br>';
foreach($numero as $valor){
    echo $valor . '<br>';
}

echo '<br>'; // Adicionando uma linha em branco para separar a saída

// Adicionando o número 60 ao final do array
array_push($numero, 60);

// Adicionando o número 5 no começo do array
array_unshift($numero, 5);

// Imprimindo os números após as modificações, substituindo a linha anterior
echo 'Array modificado: <br>';
foreach($numero as $valor){
    echo $valor . '<br>';
}
?>
