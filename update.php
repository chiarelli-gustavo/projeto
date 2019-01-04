<?php
require_once 'conexao.php';

$id = $_POST['id'];
//$novo_titulo = $_POST['titulo'];
$novo_autor = $_POST['autor'];
$novo_ano = $_POST['ano'];
$novo_editora = $_POST['editora'];
$novo_genero = $_POST['genero'];
$novo_preco = $_POST['preco'];
$novo_foto = $_POST['foto'];


$sql = "UPDATE livros SET  preco = $novo_preco, autor='$novo_autor', ano='$novo_ano', editora='$novo_editora', genero='$novo_genero', foto='$novo_foto' WHERE id= '$id'";

if (mysqli_query($conn, $sql)){
    
    echo "Alterada com sucesso";
    
} else {
    echo "ERRO: " . mysqli_error($conn);
}

mysqli_close($conn);

?>