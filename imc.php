<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";

echo "<br> Peso: ". $peso = $_POST['peso'];
echo "<br> Altura: ". $altura = $_POST['altura'];

$imc = $peso / $altura**2;
echo "<br>Resultado: $imc ";


switch ($imc) {
    case($imc <= 18.5):
        //processamento
        $msg = "baixo peso";
        break;
    case($imc <= 24.9):
        //processamento
        $msg = "peso normal";
        break;
    case($imc <= 29.9):
        //processamento
        $msg = "sobrepeso";
        break;
    case($imc <= 34.9):
        //processamento
        $msg = "obesidade grau I";
        break;
    case($imc <= 39.9):
        //processamento
        $msg = "obesidade grau II";
        default;
        $msg = "Obesidade grau III";

}

echo "<br>". $msg;
?>