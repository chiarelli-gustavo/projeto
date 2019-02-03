<?php

        $nome = $_POST["nome_cadastro"];
        $email_cadastro = $_POST["email_cadastro"];
        $senha = sha1($_POST["senha_cadastro"]);
        

        // Ele "chama" o arquivo conexão
        require_once 'conexao.php';

        // Passo o comando que quero fazer no banco para variável $sql
        $sql = "INSERT INTO usuarios (nome, email, senha)
        VALUES ('$nome', '$email_cadastro', '$senha')";
        
        if (mysqli_query($conn, $sql)) {            
            echo "Cadastrado com sucesso!";
            header ('location: index.php');
        } else {
            echo "Erro: ". $sql . "<br>" . mysqli_error($conn);
        }
            
        mysqli_close($conn);
?>