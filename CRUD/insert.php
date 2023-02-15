<?php 

// Criação de variáveis 
$nome = $_GET["nome_cad"];
$e_mail =$_GET["email_cad"];
$senha =$_GET["senha_cad"];

// Criação de variáveis para acessar o banco de dados 

// foi colocado o ip 127.0.0.1 mas pode ser trocado para localhost caso de problema
$server = "127.0.0.1";
$user = "root";
$password = "";
$dbname = "prettyfashion";

//conexão

$connect = new mysqli($server, $user, $password,$dbname);


//checa conexão


if($connect -> connect_error)
{
      die("Falha na conexão: " . $connect -> connect_error);
}



//SQL

$sql = "INSERT INTO `moda`(`email`, `nome`, `senha`) VALUES ('$e_mail','$nome','$senha');";

echo $sql;

if (mysqli_query($connect, $sql)) 
{
      echo "<br><br>Novo registro criado com sucesso";
} else 

{
      echo "Error: " . $sql . "<br>" . mysqli_error($connect);
	  
}	  
$connect->close();



// redireciona para a tabela com todos os usuarios
function Redirect($url, $permanent = false)
{
  header('Location: ' . $url, true, $permanent ? 301 : 302);
  exit();
}
Redirect('../login/login.php', false);


?>