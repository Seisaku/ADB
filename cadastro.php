<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro</title>
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
<div id="registrar">
<h1>Sistema de Transcrição</h1>
<h2>Registrar Novo Usuário</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Nome:<tr> <input type="text" name="nome"><br>
e-mail: <input type="text" name="email"><br>
Senha: <input type="password" name="pwd"><br>
Confimação: <input type="password" name="pwdr"><br>
<input type="submit" value="Registrar">
</form>

<?php

if($_POST["pwd"]!=$_POST["pwdr"]){
	echo "não verificados";
}else{
	echo $_POST["nome"];
	echo $_POST["email"];
	echo $hashed_password = crypt($_POST["pwd"]); // let the salt be automatically generated
	
if (crypt($_POST["pwdr"], $hashed_password) == $hashed_password) {
   echo "Password verified!";
}
	
}

/* You should pass the entire results of crypt() as the salt for comparing a
   password, to avoid problems when different hashing algorithms are used. (As
   it says above, standard DES-based password hashing uses a 2-character salt,
   but MD5-based hashing uses 12.) */
//if (crypt($user_input, $hashed_password) == $hashed_password) {
//   echo "Password verified!";
//}


?>





</div>
</body>
</html>