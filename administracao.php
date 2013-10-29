<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administração</title>
<link href="main.css" rel="stylesheet" type="text/css" />
</head>
<?php 

?>
<body>
<nav>
<a href="login.php">Login</a>
<a href="cadastro.php">Cadastro</a>
<a href="transcricao.php">Transcrição</a>
<a href="revisao.php">Revisão</a>
<a href="administracao.php">Administração</a>
</nav>
</div>
<div id="adm">
<h1>Administrar Tema</h1>
<form>
Novo Tema: <input type="text" name="nome"><input type="submit" name="submit" value="Adicionar">
</form>
<form>
Novo SubTema: <input type="text" name="nome"><input type="submit" name="submit" value="Adicionar">
<select>
  <option value="Tema1">Tema1</option>
  <option value="Tema2">Tema2</option>
  <option value="Tema2">Tema3</option>
</select>
</form>
<h1>Cadastrar Audio</h1>
<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Arquivo:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Enviar">
</form>
<h1>Relatórios</h1>
<form><input type="radio" name="tipo" value="transcricao">Transcrição
<input type="radio" name="tipo" value="revisao">Revisão
<input type="radio" name="tipo" value="completo">Completo<br>
Nome:<tr> <input type="text" name="nome"><br>
<input type="submit" value="Gerar Relatório">
</form>
</div>

</body>
</html>