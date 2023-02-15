<html>
  <head>
    <title>Login</title>
    <link rel="icon" href="login/logo-removebg-preview.png" />
    <link rel="stylesheet" href="style_one.css">
    <style>
      input[type="submit"]{
        margin-top: 30px;
      }
      #mensagem{
        width: 50%;
      }
      span{
        padding: 6px 20px;
        border-radius: 10px;
    }
      .erro{
          background-color: #ffecec;
          border: 1px solid #f5aca6;
      }
    </style>
  </head>
  <body>
    <form method="post" action="../CRUD/cadastra_usuario_insert.php">
        <h3>Login</h3>
        <label for="nome_cad" >Nome</label>
        <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="insira seu nome">
        <label for="senha_cad" >Senha</label>
        <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="insira a sua senha">
        <input type="submit">
        <a href="cadastro.php">Cadastre-se</a><br>
        <img style="width: 100%;padding: 0em 8em 0em 7em;" src="logo-removebg-preview.png"/>
    </form>
  </body>
</html>
<?php
  if ($_GET) {
    echo "<script type='text/javascript'>alert('Os dados não conferem!Faça seu cadastro para depois fazer o login.');</script>";
  }
?>