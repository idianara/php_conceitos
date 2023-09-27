<?php
//funções de manipulação array

/*
    Array_push — Adiciona um ou mais elementos no final de um array
    Array_pop — Extrai um elemento do final do array
    array_shift — Retira o primeiro elemento de um array
    array_unshift — Adiciona um ou mais elementos no início de um array
    array_splice — Remove uma parte array e a substitui por outra coisa
    count — Conta o número de elementos de uma variável, ou propriedades de um objeto
*/
$array = []; // uma atribuição de valores (array)
$vazio=""; //variavel vazia do tipo string

array_push($array, "Senac", "TAU");

array_push($array,["Igor", "Samuel", "Evelyn", "Matheus", "Estevan"]);

array_push($array,"teste");

echo "<pre>"; //formata o mode de apresentação da saída
print_r($array); //mostra o conteúdo simplificado do array
echo "</pre>";

echo "<br> A variavel array possui ".count($array). "posições.";
#--------------------------------------------------------------------
array_pop($array);

echo "<pre>"; //formata o mode de apresentação da saída
print_r($array); //mostra o conteúdo simplificado do array
echo "</pre>";
#--------------------------------------------------------------------
array_shift($array);

echo "<pre>"; //formata o mode de apresentação da saída
print_r($array); //mostra o conteúdo simplificado do array
echo "</pre>";
#--------------------------------------------------------------------
array_unshift($array,"laranja");

echo "<pre>"; //formata o mode de apresentação da saída
print_r($array); //mostra o conteúdo simplificado do array
echo "</pre>";
#---------------------------------------------------------------------
array_splice($array,);

echo "<pre>"; //formata o mode de apresentação da saída
print_r($array); //mostra o conteúdo simplificado do array
echo "</pre>";

?>