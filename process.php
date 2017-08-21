<?php

	include ('connection.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$endereco = $_POST['endereco'];

	$query = $mysqli->query("INSERT into cadastro (email, endereco, nome, telefone) values ('".$email."', '".$endereco."', '".$nome."', '".$tel."')");

	if($query){
	?>
		<!DOCTYPE html>
			<html>
				<head>
				<meta charset="utf-8">
    			<meta http-equiv="X-UA-Compatible" content="IE=edge">
    			<meta name="viewport" content="width=device-width, initial-scale=1.0">
    			<link rel="stylesheet" type="text/css" href="style.css">
				<title>Formulário enviado com sucesso!</title>
				</head>

				<body>
					<div class="container">
						<h1>Formulário enviado com sucesso =)</h1>
						<div class="linha"></div>
					</div>
				</body>
			</html>
	<?php
}


