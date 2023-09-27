<?php

//laço de repetição for

for($i=1 ; $i<=10 ; $i+=2){
//inicial comp saida

    echo "<br>i = " . $i;
    if($i == 11){
       // break;  //interrompe o laço
        $i = 100;

    }

}
echo "<p>----------------------------------------------------";

for($i=1 ; $i<=10 ; $i++){
    //inicial comp saida
    
       // echo "<br>i = " . $i;
        if($i == 5 || $i == 8){
           // break;  //interrompe o laço
           // $i = 100;
           continue; //faz o contrario do break, ele continua o laço
        }else{
            echo "<br>i = " . $i;
        }
    
    }
?>