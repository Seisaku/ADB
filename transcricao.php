<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
<div id="transcrever">
<h1>Sistema de Transcrição</h1>
<h2>Nova Transcricao</h2>
<h3>Titulo</h3>
<form>
<audio controls>
  <source src="audio/04 Bubbly.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
<br>
Tempo inicio<input type="time" name="tempo_i"/>
Tempo fim<input type="time" name="tempo_f"/>
<select>
  <option value="Tema1">Tema1</option>
  <option value="Tema2">Tema2</option>
  <option value="Tema2">Tema3</option>
</select>
<select>
  <option value="SubTema1">SubTema1</option>
  <option value="SubTema2">SubTema2</option>
  <option value="SubTema2">SubTema3</option>
</select>
<br />
<textarea rows="20" cols="100"></textarea>
<br /><input type="submit" value="Enviar">
</form>
</div>
</body>
</html>