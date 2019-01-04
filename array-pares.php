<?php 

//Declarei que $pares é um array
$pares = [];

    //for de 0 até 10
    for($i=0; $i<=10; $i++) {
        
            //verifico se o numero é par
    
            if ($i%2==0){
            // aloca o elemento na última posição que está vazia
            array_push($pares, $i);
            }
    }


    // a função count conta a quantidade de elementos do array

            for($i=0; $i<count($pares); $i++) {
    
            echo $pares[$i]."<br/>";  // o ponto aí é para concatenar
        
            }



    /*laço de repetição e array
    
    $pares=0;

    for($i=0; $i<11; $i++){
       
        if ($pares=($i%2)-1) {
        $arr[$pares]=$i;
            }
         echo "$arr[$pares]<br/>";
    }
    Não posso exibir o array diretamente 
 
 echo $arr;  
 dá erro - sempre mostrar a chave com a posição dos elementos a serem mostrado */

?>