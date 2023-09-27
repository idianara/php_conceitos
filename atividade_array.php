<?php
/*
    1-crie uma variavel do tipo array com o nome frutas
        esse array deve ter os seguintes elementos
        mamão,maçã,melão
    2-utilizando as funções de array faça:
        a-inclusão de uma nova fruta no inicio do array
        b-inclusão de uma nova fruta no final do array
        c-exclusão da fruta que está na posição 1
        d-exclusão da fruta que está na ultima posição do array
        e-alteração da fruta que está na posição 01 por maracujá
    3-a cada alteração no array realize um print_r ou var-dump
        para comprovar os resultados obtidos.

*/

$array = ["mamão", "maçã", "melão"];

echo "<pre>"; //formata o mode de apresentação da saída
print_r($array); //mostra o conteúdo simplificado do array
echo "</pre>";
#--------------------------------------------------------

array_unshift($array,"uva");

echo "<pre>"; //formata o mode de apresentação da saída
print_r($array); //mostra o conteúdo simplificado do array
echo "</pre>";
#---------------------------------------------------------
array_push($array,"banana");

echo "<pre>"; //formata o mode de apresentação da saída
print_r($array); //mostra o conteúdo simplificado do array
echo "</pre>";
#----------------------------------------------------------
array_splice($array, 1,1);

echo "<pre>"; //formata o mode de apresentação da saída
print_r($array); //mostra o conteúdo simplificado do array
echo "</pre>";
#---------------------------------------------------------
array_pop($array);

echo "<pre>"; //formata o mode de apresentação da saída
print_r($array); //mostra o conteúdo simplificado do array
echo "</pre>";
#--------------------------------------------------------
array_splice($array, 1,1, ["maracuja"]);

echo "<pre>"; //formata o mode de apresentação da saída
print_r($array); //mostra o conteúdo simplificado do array
echo "</pre>";
?>