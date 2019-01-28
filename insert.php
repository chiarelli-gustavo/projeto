<?php
//arquivo para inserir os dados de formulários no banco de dados
//Seguir a ordem da tabela/coluna do banco ao nomear as variáveis e receber os dados

//variáveis recebem os valores que estão especificados pelo name do formulário (o name que fica entre ['']) 
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano = $_POST['ano'];
$editora = $_POST['editora'];
$genero = $_POST['genero'];
$preco = $_POST['preco'];
$foto = $_POST['foto'];

//Ele 'chama' o arquivo conexao
require_once 'conexao.php';

//Passo o comando que quero fazer no banco para variavel $sql


$sql = "INSERT INTO livros (titulo, autor, ano, editora, genero, preco, foto) 
        VALUES ('$titulo', '$autor', $ano, '$editora', '$genero', $preco, '$foto')";
//quando a variável é número melhor deixá-la sem aspas '', principalmente para poderem ser feitos cálculos 


//executa o comando $sql na conexão $conn (consulta)
if (mysqli_query($conn, $sql)) {
 
    echo "Inserido com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>