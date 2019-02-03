<?php
require_once 'conexao.php';

$id = $_POST['id'];
$novo_autor = $_POST['autor'];
$novo_ano = $_POST['ano'];
$novo_editora = $_POST['editora'];
$novo_genero = $_POST['genero'];
$novo_preco = $_POST['preco'];
$novo_foto = $_POST['foto'];
$novo_desconto = $_POST['desconto'];
$novo_descricao = $_POST['descricao'];
$novo_estoque = $_POST['estoque'];
$novo_isbn = $_POST['isbn'];



$sql = "UPDATE livros SET autor='$novo_autor', ano=$novo_ano, editora='$novo_editora', genero='$novo_genero', preco = $novo_preco, foto='$novo_foto', desconto=$novo_desconto, descricao='$novo_descricao', estoque=$novo_estoque, isbn=$novo_isbn WHERE id= '$id'";

if (mysqli_query($conn, $sql)){
    header ('location: editar-estoque.php');
    
    echo "Alterada com sucesso";
    
} else {
    echo "ERRO: " . mysqli_error($conn);
}

mysqli_close($conn);

?>