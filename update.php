<?php
require_once 'conexao.php';

$id = $_POST['id'];
//$novo_titulo = $_POST['titulo'];
$novo_autor = $_POST['autor'];
$novo_ano = $_POST['ano'];
$novo_editora = $_POST['editora'];
$novo_genero = $_POST['genero'];
Snovo_desconto = $_POST['desconto'];
$novo_preco = $_POST['preco'];
$novo_foto = $_POST['foto'];
$novo_descricao = $_POST['descricao'];
$novo_estoque = $_POST['estoque'];
$novo_isbn = $_POST['isbn'];



$sql = "UPDATE livros SET   autor='$novo_autor', ano='$novo_ano', editora='$novo_editora', genero='$novo_genero', desconto='$desconto', preco = $novo_preco, foto='$novo_foto', descricao='$descricao', estoque='$estoque', isbn='$isbn' WHERE id= '$id'";

if (mysqli_query($conn, $sql)){
    
    echo "Alterada com sucesso";
    
} else {
    echo "ERRO: " . mysqli_error($conn);
}

mysqli_close($conn);

?>