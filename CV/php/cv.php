<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Formulário de Currículo</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1,0"/>
    <meta name="author" content="Alan Machado"/>
    <link rel="stylesheet" href="../css/main.css"/>
  </head>
  <body>
    <h1><?php echo $_POST["nome"]; ?></h1>
    <p>Idade: <?php echo $_POST["idade"]; ?> anos<br/>
    Estado Civil: <?php echo $_POST["ec"]; ?><br/>
    Reside em <?php echo $_POST["cidade"]; ?> &#8210; <?php echo $_POST["estado"]; ?><br/>
    Telefone: <?php echo $_POST["tel1"]; ?><?php echo $_POST["tel2"]; ?><br/>
    e-mail: <?php echo $_POST["email"]; ?></p>
    <br/>
    <hr/>
    <h3><?php echo $_POST["titulo"]; ?></h3>
    <p><?php echo $_POST["escola"]; ?><?php echo $_POST["escola2"]; ?></p>
    <br/>
    <hr/>
    
  </body>
</html>
