<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessã- - Implementando Usuários</title>

    <?php
    
    if($_POST){

        session_start();
        $_SESSION["nome"] = $_POST["nome"];
        $_SESSION["senha"] = $_POST["senha"];

        header("location:sessao_formularios.php");

    }

    ?>

</head>
<body>
    
    <form name="logar" method="post" action="sessao_implementando_formularios.php">

    Nome: <br>
    

    </form>

</body>
</html>