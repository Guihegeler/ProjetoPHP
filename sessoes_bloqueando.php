<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
        session_start();

        $_SESSION["nome"] = $_POST["nome"];
        $_SESSION["senha"] = $_POST["senha"];
    ?>
</head>
<body>
    
    <b>Funcionario: </b> <?php echo $_SESSION["nome"] ?>, logado com sucesso. <br>

    <b>Data da conexão: </b> <?php echo date("d/m/y") ?> <br>

    <b>hora da conexão: </b> <?php echo date("H:i:s") ?> <br>

    <a href="sessoes_verifica_sessao.php">Area de administração</a>

</body>
</html>