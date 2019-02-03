<?php
	session_start();
	
	$item = $_POST['item'];
	$produto = $_POST['titulo'];
	
	foreach ($_SESSION['carrinho'] as $indice => $valor) :
		if($valor['titulo']==$produto){
			unset($_SESSION['carrinho'][$indice]);
		}
	endforeach;

	header('location: carrinho.php');
?>