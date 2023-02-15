<?php

// foi colocado o ip 127.0.0.1 mas pode ser trocado para localhost caso de problema
$server = "127.0.0.1";
$user = "root";
$password = "";
$dbname = "prettyfashion";

//conexão
$id = $_GET["id"];
$connect = new mysqli($server, $user, $password, $dbname);

//checa conexão

if($connect -> connect_error)
{
die("Falha na conexão: " . $connect -> connect_error);
}
// sql to delete a record
$sql = "DELETE FROM moda WHERE ID_MODA = $id";

if ($connect->query($sql) === TRUE) {
  echo "O id: $id, foi deletado com sucesso.";
} else {
  echo "Erro ao deletar: " . $connect->error;
}

?>