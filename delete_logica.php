<?php
require_once 'conexao.php';

$id = $_POST['id'];

$sql = "DELETE FROM livros WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header('location: delete.php');
} else {
    echo "Erro: " . mysqli_error($conn);
}

mysqli_close($conn);

?>