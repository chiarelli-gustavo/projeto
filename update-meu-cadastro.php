<?php
require_once 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
Scpf = $_POST['cpf'];
$dataNascimento = $_POST['dataNascimento'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$numCartao = $_POST['numCartao'];
$nomeCartao = $_POST['nomeCartao'];
$validadeCartao = $_POST['validadeCartao'];
$codigoCartao = $_POST['codigoCartao'];


$sql = "UPDATE livros SET  nome='$nome', email='$email', celular='$celular', cpf='$cpf',  dataNascimento= '$dataNascimento', cep='$cep', rua='$rua', numero='$numero', complemento='$complemento', complemento='$complemento', cidade='$cidade', estado='$estado', numCartao='$numCartao', nomeCartao='$nomeCartao', validadeCartao='$validadeCartao', codigo='$codigo' WHERE id= '$id'";

if (mysqli_query($conn, $sql)){
    
    echo "Alterada com sucesso";
    
} else {
    echo "ERRO: " . mysqli_error($conn);
}

mysqli_close($conn);

?>