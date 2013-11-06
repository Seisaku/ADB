<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Login</title>
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
		<div id="login">
			<h1>Sistema de Transcrição</h1>
			<h2>Logar</h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				Usuário:
				<input type="text" name="email">
				<br>
				Senha:
				<input type="password" name="pwd">
				<br>
				<input type="submit" value="Entrar">
			</form>
		</div>
		<?php
		if (!isset($_POST['submitform'])) {
			echo "INICIO<br>";
		}

		$con = "";
		$result = "";
		$email = "";
		$row = "";
		$con = mysqli_connect("localhost", "adb", "298476", "mydb");
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		echo "Conectado<br>";
		 if(!(empty($_POST["email"])))
		 {
			echo "EMAIL: " . $_POST["email"];	
			$email = $_POST["email"];
		}else {
			echo "ERRO!";
		}
		echo "<br>";
		
		echo "SELECT * FROM usuario WHERE email = $email";
		$result = mysqli_query($con, "SELECT * FROM usuario WHERE email = $email");
		while ($row = mysqli_fetch_array($result)) {
			echo $row['nome'] . " " . $row['email'];
			echo "<br>";
		}
		//if (crypt($_POST["pwdr"], $hashed_password) == $hashed_password)
		?>
	</body>
</html>