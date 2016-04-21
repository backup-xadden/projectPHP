<?php

?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Athernos</title>
	<link rel="shortcut icon" href="img/connection.png">
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" href="css/LoginLayout.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
	<div id="logo">
		<a href="index.php"><img src="img/whitelogo.png" alt="logo"></img></a>
		<span><a href="index.php">ATHERNOS</a></span>
	</div>
	
	<form action="auth.php" method="post">	
	<div class="card">
		<span class="whitespan">USERNAME:</span>
		<span><input type="text" name="username" class="input"></span>
		<br>
		<span class="whitespan">PASSWORD:</span>
		<span><input type="password" name="password" class="input"></span><br>
		<span><button type="submit" class="blackspan login">LOGIN</button></span>
	</div>
	</form>
	
	<div class="card">
			<span class="blackspan register">Não tem conta? Crie uma aqui</span>
	</div>
</body>
</html>