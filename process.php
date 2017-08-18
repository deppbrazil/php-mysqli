<?php
	
	include ('connection.php');

	$id=0;
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$endereco = $_POST['endereco'];

	$sql = $mysqli-> prepare("insert into cadastro values (?,?,?,?,?)");
	$sql-> bind_param("issss",$id,$nome,$email,$endereco)
	$sql-> execute();
	$sql-> store_result();
	$result = $sql-> affected_rows;

	if ($result > 0){

		echo "<script>
				alert('Dados inseridos com sucesso!');
				window.location.href='index.html';
			</script>";
	}

	else {

		echo "<script>
				alert('Erro!');
				window.location.href='index.html';
			</script>";
	}

?>