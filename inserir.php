<?php
$pwd = "";
$nome = "";
$email = "";
$hashed_password = "";
$error = "";

if (strlen($_POST["pwd"]) < 8) {
	$error .= "Password too short!";
	echo "Senha curta<br>";
} elseif ($_POST["pwd"] != $_POST["pwdr"]) {
	echo "Senhas não batem<br>";
} else {
	
	if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $_POST["email"])) {
		echo "Formato inválido de e-mail<br>";
	}
	$con = mysqli_connect("localhost", "adb", "298476", "mydb");
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$hashed_password  = crypt($_POST["pwd"]);
	$sql = "INSERT INTO usuario (nome, email, senha)
VALUES('$_POST[nome]','$_POST[email]','$hashed_password')";
	if (!mysqli_query($con, $sql)) {
		echo "ERRO SQL<br>";	
		die('Error: ' . mysqli_error($con));
	}
	echo "Usuario " . $_POST["nome"] . " registrado com sucesso<br>";
	mysqli_close($con);
}
?>

