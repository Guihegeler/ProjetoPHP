<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formulário de cadastro</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/styles.css">	
</head>
<body>
<h1>Cadastro de usuários</h1>
 
	<form action="qqp.php" method="post">
<label for="primeiroNome">Primeiro nome</label>
<input type="text" name="primeiroNome" 
		id="primeiroNome" placeholder="Primeiro nome ..."
		maxlength="50" required>	
<label for="segundoNome">Sobrenome</label>
<input type="text" name="segundoNome" 
		id="segundoNome" placeholder="Sobrenome ..."
		maxlength="50" required>
<label for="escolhaPets">Escolha seu Pet</label>
<select id="escolhaPets" name="escolhaPets">
<option value="nenhum">Nenhum</option>
<option value="cachorro">Cachorro</option>
<option value="gato">Gato</option>
<option value="peixe">Peixe</option>
<option value="passaro">Pássaro</option>
</select> <br><br>

    <label>Escolha um ou mais pets:</label><br>
    <input type="Checkbox" name="cachorro"><label>Cachorro</label><br>
    <input type="checkbox" name="gato"><label>Gato</label><br>
    <input type="checkbox" name="peixe"><label>Peixe</label><br>
    <input type="checkbox" name="passaro"><label>Pássaro</label><br>

    <button type="submit">Enviar</button>
    <button type="reset">Limpar</button>
   
    <br><br>

    <label>Estado civil: </label><br>
    <input type="radio" name="estado_civil" value="casado"><label>Casado</label><br>
    <input type="radio" name="estado_civil" value="solteiro"><label>Solteiro</label><br>

    <label>Dados ocultos</label>
    <input type="hidden" name="user" value="admin">
    <input type="hidden" name="nivel" vavue="2">
    <input type="submit" name="OK">  
    <br><br>
    
    <textarea name="msg" cols="50" rows="8">

    </textarea>
    <br><br>

    <input type="submit" name="Enviar">

</form>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>