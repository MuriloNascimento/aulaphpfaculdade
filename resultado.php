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

	$query = "select * from registro order by codigo_registro desc";
	$resultado = mysql_query($query,$conecao);

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
		
		<?php 

			while ($linha = mysql_fetch_array($resultado)) {
				
				echo "<section> <div> $linha[nome] <br> $linha[cidade] <br> $linha[estado] <br> $linha[mensagem] <br> </div></section> <br>";
			}

		?>

		<section>
			<div>
				<a href="index.php">Cadastrar registro</a>
			</div>
		</section>
		
	</body>
</html>