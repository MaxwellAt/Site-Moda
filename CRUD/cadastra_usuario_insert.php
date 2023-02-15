<?php

// Criação de variáveis
$nome = $_POST["nome_cad"];
$senha = $_POST["senha_cad"];

// Criação de constantes para acessar o banco de dados
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'prettyfashion');

// Conexão com o banco de dados
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// SQL
$sql = "SELECT `NOME`, `SENHA` FROM `moda` WHERE NOME = '$nome' AND SENHA = '$senha'";

// Executa a consulta
$result = mysqli_query($conn, $sql);

// Verifica se o usuário foi encontrado
if (mysqli_num_rows($result) > 0) {
    // Usuário encontrado
    header("Location: lista.php");
    exit();
} else {
    // Usuário não encontrado
    header("Location: ../login/login.php?error=AcessoNegado",false);
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);

?>