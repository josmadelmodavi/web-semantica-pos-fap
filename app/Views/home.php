<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>PokémonGo</title>
	<meta name="description" content="Exercício da Pós-Graduação. Módulo: Web Semântica">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico" />
	<link rel="stylesheet" href="<?= base_url('public/assets/css/tables-bootstrap.css') ?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/style.css') ?>">
</head>

<body>

	<header>
		<?= view('menu/nav') ?>
		<div class="heroe">
			<h1>PokémonGo</h1>
			<h2>Exercício da Pós-Graduação. Módulo: Web Semântica</h2>
		</div>
	</header>

	<section>
		<h2>Classe: Pokémon</strong></h2>
		<table class="table table-bordered">
			<thead>
				<tr style="text-align:left;">
					<th scope="col" width="20%">Property</th>
					<th scope="col" width="20%">Expected Type</th>
					<th scope="col" width="60%">Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nome</td>
					<td>String</td>
					<td>Nome do Pokémon.</td>
				</tr>
				<tr>
					<td>Categoria</td>
					<td>String</td>
					<td>A qual classe o Pokémon pertence.</td>
				</tr>
				<tr>
					<td>PokémonID</td>
					<td>Int</td>
					<td>Identificador do Pokémon</td>
				</tr>
			</tbody>
		</table>

		<h2>Classe: Jogador</strong></h2>
		<table class="table table-bordered">
			<thead>
				<tr style="text-align:left;">
					<th scope="col" width="20%">Property</th>
					<th scope="col" width="20%">Expected Type</th>
					<th scope="col" width="60%">Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nome</td>
					<td>String</td>
					<td>Nome do Jogador.</td>
				</tr>
				<tr>
					<td>Pokémon</td>
					<td>String</td>
					<td>Nome do Pokémon.</td>
				</tr>
				<tr>
					<td>Badges</td>
					<td>String</td>
					<td>Item recebido após vencer batalha com mestre de determina ginásio.</td>
				</tr>
			</tbody>
		</table>

		<h2>Classe: Evento</strong></h2>
		<table class="table table-bordered">
			<thead>
				<tr style="text-align:left;">
					<th scope="col" width="20%">Property</th>
					<th scope="col" width="20%">Expected Type</th>
					<th scope="col" width="60%">Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Jodagores</td>
					<td>String</td>
					<td>Nome dos jogadores envolvidos na batalha entre os Pokémons.</td>
				</tr>
				<tr>
					<td>Categoria</td>
					<td>Time</td>
					<td>Tempo de duração de uma batalha.</td>
				</tr>
				<tr>
					<td>PokémonID</td>
					<td>Int</td>
					<td>Nome do organizador de um evento.</td>
				</tr>
			</tbody>
		</table>

		<h2>Classe: Ginásio</strong></h2>
		<table class="table table-bordered">
			<thead>
				<tr style="text-align:left;">
					<th scope="col" width="20%">Property</th>
					<th scope="col" width="20%">Expected Type</th>
					<th scope="col" width="60%">Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>ID</td>
					<td>Int</td>
					<td>Identificador do Ginásio.</td>
				</tr>
				<tr>
					<td>Tipo</td>
					<td>String</td>
					<td>Elemento predominante no ginásio (fogo, água, etc).</td>
				</tr>
				<tr>
					<td>Proprietário</td>
					<td>String</td>
					<td>Nome do mestre Pokémon.</td>
				</tr>
			</tbody>
		</table>
	</section>

	<?= view('template/footer') ?>

	<script>
		function toggleMenu() {
			var menuItems = document.getElementsByClassName('menu-item');
			for (var i = 0; i < menuItems.length; i++) {
				var menuItem = menuItems[i];
				menuItem.classList.toggle("hidden");
			}
		}
	</script>

</body>

</html>