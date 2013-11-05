<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Cadastro</title>
		<link href="main.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<nav>
			<a href="login.php">Login</a>
			<a href="cadastro.php">Cadastro</a>
			<a href="transcricao.php">Transcrição</a>
			<a href="revisao.php">Revisão</a>
			<a href="administracao.php">Administração</a>
		</nav>
		<div id="registrar">
			<h1>Sistema de Transcrição</h1>
			<h2>Registrar Novo Usuário</h2>

			<form method="post" action="inserir.php">
				Nome:
				<tr>
					<input type="text" name="nome">
					<br>
					e-mail:
					<input type="text" name="email">
					<br>
					Senha:
					<input type="password" name="pwd">
					<br>
					Confimação:
					<input type="password" name="pwdr">
					<br>
					<input type="submit" value="Registrar">
			</form>
		</div>
	</body>
</html>