<?php
                
session_start();
include 'conexao.php';
$email = $_POST["email_login_adm"];
$senha = sha1($_POST["senha_login_adm"]);         
$sql= "SELECT id, nome FROM usuarios where email= '$email' AND senha = '$senha' LIMIT 1"; 
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  $_SESSION['email'] = $email;
  header ('location: select.php');
}
else {
  header ('location: index.php');
}
mysqli_close($conn);
?>