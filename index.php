<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/stilo.css">
		<title>Livro de visita</title>
	</head>
	<body>
		<header>
			<div>
				<h2>Livro de visita</h2>
			</div>
		</header>
		<section>
			<div>
				<form action="resultado.php" method="post">
					<label for="nome">Nome
					<input type="text" name="nome" id="nome" value="" autofcus></label><br>
					<label for="cidade">Cidade
					<input type="text" name="cidade" id="cidade" value=""></label><br>
					<label for="estado">Estado
					<input type="text" name="estado" id="estado" value="" size="2" maxlength="2"></label><br>
					<label for="mensagem">Mensagen<br>
					<textarea name="mensagem" id="mensagem" rows="4" cols="80"></textarea></label>
					<button type="submit" name="cadastrar" id="cadastrar">enviar mensagen</button>
				</form>
			</div>
		</section>
	</body>
</html>