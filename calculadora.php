<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";

echo "<br> Num1: ". $num1 = $_POST['num1'];
echo "<br> Num2: ". $num2 = $_POST['num2'];
echo "<br> Operador: ". $operador = $_POST['operador'];

switch ($operador) {
    case '+':
        $resultado = $num1 + $num2;
        break;

    case '-':
        $resultado = $num1 - $num2;
        break;

    case '*':
        $resultado = $num1 * $num2;
        break;

    case '/':
        $resultado = $num2!=0 ? $num1 / $num2: "não é possivel divisão por 0 (zero).";
        break;
    
    default:
        $resultado = "operador Inválido";
        break;
}
echo "<br>Resultado: $resultado";
?>