<?php

?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Athernos</title>
	<link rel="shortcut icon" href="img/connection.png">
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
	<div id="logo">
		<a href="index.php"><img src="img/whitelogo.png" alt="logo"></img></a>
		<span><a href="index.php">ATHERNOS</a></span>
	</div>
	
	<?php
		echo '<a href="login.php" class="menu">LOGIN</a>';
	?>
		
	<div class="card">
		<span class="whitespan">O Melhor do Mundo</span><br>
		<span class="whitespan">Jogo da Forca</span>
		<?php
			echo '<a href="login.php"><span class="blackspan">Start Now</span></a>';
		?>
	</div>
	
	<div class="card">
		<?php
			echo '<span class="score">TOP Andre - 23</span>';
		?>
	</div>
</body>
</html>