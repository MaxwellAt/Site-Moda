<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<h1>Usuários Cadastrados<h1>
<?php

// foi colocado o ip 127.0.0.1 mas pode ser trocado para localhost caso de problema
$server = "127.0.0.1";
$user = "root";
$password = "";
$dbname = "prettyfashion";

//conexão

$connect = new mysqli($server, $user, $password, $dbname);

//checa conexão

if($connect -> connect_error)
{
die("Falha na conexão: " . $connect -> connect_error);
}

//consulta

$sql = "SELECT *  FROM moda";
$consultaSQL = $connect->query($sql);


if (mysqli_num_rows($consultaSQL) > 0)
{
//envia as vagas para uma mesma linha

?>

<table>
  <tr>
    <th>Codigo</th>
    <th>Nome</th>
    <th>e_mail</th>
  	<th>senha</th>
</tr>
  
  

<?php
while ($linha = mysqli_fetch_object($consultaSQL))
{
?>
	
	<tr>
    <td><?php echo $linha->ID_MODA; ?></td>
    <td><?php echo $linha->NOME; ?></td>
    <td><?php echo $linha->EMAIL; ?></td>
	<td><?php echo $linha->SENHA; ?></td>
    <td>
        <a href="deletausuario.php?del=<?php echo $linha->ID_MODA; ?>" class="del_btn">Delete</a>
    </td>
	 
   </tr>
  
<?php
}
}

else
{
echo "Sem resultados";
}

$connect->close();

?>
</body>
</html> 