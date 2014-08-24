<?php

	$nome = $_POST["nome"];
	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"];
	$mensagem = $_POST["mensagem"];

	include "conecta_mysql.inc";

	try {
		$sql = "insert into registro (codigo_registro,nome,cidade,estado,mensagem) values (default,'$nome','$cidade','$estado','$mensagem')";
		mysql_query($sql,$conecao);
	} catch (Exception $e) {
		echo $e;
	}

	mysql_close();

?>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/stilo.css">
		<title>Resultado</title>
	</head>
	<body>
		<header>
			<div>
				<h2>Resultado</h2>
			</div>
		</header>
		<section>
				<?php echo "<div> $nome <br> $cidade <br> $estado <br> $mensagem </div>";  ?>
		</section>
	</body>
</html>