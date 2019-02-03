<?php
    session_start();
    
    $i = $_POST['indice'];
    $q = $_POST['qtd'];
    
    echo "<pre>";
    print_r($_SESSION['carrinho']);
    echo "</pre>";
    
    echo "<br> Produtos do Array CARRINHO:<br>";

    foreach ($_SESSION['carrinho'] as $indice => $valor) : 
        if($indice == $i){
             echo $indice."<br>";
             $_SESSION['carrinho'][$indice]['quant'] = $q;
            $_SESSION['carrinho'][$indice]['subtotal'] = $q * floatval($valor['preco']);
            echo $valor['quant']."<br>";
            echo $valor['subtotal']."<br>";
        }
    endforeach;

    //array_multisort($valor, SORT_ASC, $_SESSION['carrinho']);
        
    echo "<br> Produtos do POST <br>";
    echo "ID: {$i} <br>";
    echo "QT: {$q} <br>";

    header("Location: carrinho.php");

    echo "<pre>";
        print_r($_SESSION['carrinho']);
    echo "</pre>";


    
?>