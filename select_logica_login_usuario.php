<?php

//session_start();
//if (!isset($_SESSION['email'])) {
//   header ('location: index.php');
//}

?>

<!-- Página de Autenticação de Login - Lógica  -->

<?php
                
session_start();
                
// Ele "chama" o arquivo conexão
include 'conexao.php';

$nome = $_POST['nome_login'];              
$email = $_POST['email_login'];
$senha = sha1($_POST['senha_login']);             


// Passo o comando que quero fazer no banco para variável $sql          
$sql= "SELECT id, nome FROM usuarios where email= '$email' AND senha = '$senha' LIMIT 1"; 

// Executa o comando $sql na conexão $conn
$result = mysqli_query($conn, $sql);

// Verifica se tem registros no resultado
if (mysqli_num_rows($result) > 0) {
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;  
    
  header ('location: index.php');
}
else {
  header ('location: index.php');
}

// Encerra a conexão
mysqli_close($conn);
?>