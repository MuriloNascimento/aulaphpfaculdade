<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/stilo.css">
	</head>
	<body>
		<header>
			<div>
				<h2>Cadastro de produtos</h2>
			</div>
		</header>
		<section>
			<div>
				<form action="" method="">
					<label for="nome">Nome do produto
					<input type="text" name="nome" id="nome" value=""></label><br>
					<label for="descricao">Descrição
					<input type="text" name="descricao" id="descricao" value=""></label><br>
					<label for="preco">Preço
					<input type="text" name="preco" id="preco" value=""></label><br>
					<label for="peso">Peso
					<input type="text" name="peso" id="peso" value=""></label><br>
					<label for="categoria">Categoria
					<select name="categoria" id="categoria">
						<option value="1">bebidas</option>
						<option value="3">bazzar</option>
						<option value="4">perfumaria</option>
						<option value="5">enlatados</option>
						<option value="6">biscoitos</option>
						<option value="7">cereais</option>
					</select></label><br>
					<label for="subcategoria">subCategoria
					<select name="subcategoria" id="subcategoria">
						<option value="1">suco</option>
						<option value="3">papel higienico</option>
						<option value="4">creme dental</option>
						<option value="5">molho de tomate</option>
						<option value="6">biscoito doce</option>
						<option value="7">arroz</option>
					</select></label><br>
					<label for="adicionais">Adicionais
					<input type="text" name="adicionais" id="adicionais" value=""></label>
					<button type="submit" name="cadastrar" id="cadastrar">cadastrar</button>
				</form>
			</div>
		</section>
	</body>
</html>