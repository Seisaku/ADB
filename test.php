<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de Transcrição</title>
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
<div id="login">
<h1>Sistema de Transcrição</h1>
<h2>Logar</h2>
<form>
Usuário: <input type="text" name="email"><br>
Senha: <input type="password" name="pwd"><br>
<input type="submit" value="Entrar">

</form>
<button id="regbuttom">Registrar</button>
</div>
<div id="registrar">
<h1>Sistema de Transcrição</h1>
<h2>Registrar Novo Usuário</h2>

<form action="test.php" method="post">
Nome:<tr> <input type="text" name="nome"><br>
e-mail: <input type="text" name="email"><br>
Senha: <input type="password" name="pwd"><br>
Confimação: <input type="password" name="pwdr"><br>
<input type="submit" value="Registrar">
</form>

</div>
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
<div id="revisao">
<h1>Sistema de Transcrição</h1>
<h2>Revisão</h2>
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
<br /><textarea rows="20" cols="100"></textarea>
<br /><input type="submit" value="Enviar">
</form>
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

<div>
</div>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="js/player.js"></script>


</body>
</html>