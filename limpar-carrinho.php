<?php
   session_start();

        if(!empty($_SESSION['carrinho'])) {
          $_SESSION['carrinho'] = [];
       }
    header ('location:index.php');

?>